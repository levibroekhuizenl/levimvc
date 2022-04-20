
<h1>Reservering maken </h1>

<form id='myform'>
    <label>Datum</label>
    <input type='datetime-local' name='res_datetime'>

    <label>Tafel</label>
    <input type='number' name='table_number'>

    <label>Aantal personen </label>
    <input type='res_number' name='amount_persons'>

    <button class='btn-create' type='submit' onClick="loadForm('myform','index.php?controller=reservations&todo=createReservation', sendToContent);">Create</button>
</form>