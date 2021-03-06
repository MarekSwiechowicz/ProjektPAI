$(document).ready(function(){
    $('.panel-header').html('SIGN IN');
});


function getUsers() {
    const apiUrl = "http://localhost:80";
    const $list = $('.users-list');

    $.ajax({
        url : apiUrl + '/?page=admin_users',
        dataType : 'json'
    })
        .done((res) => {

            $list.empty();
            //robimy pętlę po zwróconej kolekcji
            //dołączając do tabeli kolejne wiersze
            res.forEach(el => {
                $list.append(`<tr>
                    <td>${el.name}</td>
                    <td>${el.surname}</td>
                    <td>${el.email}</td>
                    <td>${el.role}</td>
                    <td>
                    <button class="btn btn-danger" type="button" onclick="deleteUser(${el.id})">
                        <i class="material-icons">delete_forever</i>
                    </button>
                    </td>
                    </tr>`);
            })
        });
}

function deleteUser(id) {
    if (!confirm('Do you want to delete this user?')) {
        return;
    }

    const apiUrl = "http://localhost:80";

    $.ajax({
        url : apiUrl + '/?page=admin_delete_user',
        method : "POST",
        data : {
            id : id
        },
        success: function() {
            alert('Selected user successfully deleted from database!');
            getUsers();
        }
    });
}

function adminStart()
{
    getUsers();
}

function deleteAdvert(id) {
    if (!confirm('Chcesz usunąć to ogłoszenie?')) {
        return;
    }

    const apiUrl = "http://localhost:80";

    $.ajax({
        url : apiUrl + '/?page=admin_delete_advert',
        method : "POST",
        data : {
            id : id
        },
        success: function() {
            alert('Pomyslnie usunięto z bazy!');
            getAdvertsAdmin();
        }
    });
}
