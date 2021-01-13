<h1>Contact form</h1>
<div id="contact">
    <form action="/contact/send" method="post">
        @csrf
        <input type="text" name="first_name" id="first_name" placeholder="yield('')">
        <br>
        <input type="submit" value="submit">
    </form>
</div>