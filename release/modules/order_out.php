<div class="order">
    <div class="name"><? echo($mysqlArray["name"]); ?></div>
    <div class="user">Заказчик: <a href="#?type=user&id=<? echo($mysqlArray2["id"]); ?>"><? echo($mysqlArray2["login"]); ?></a></div>
    <div class="description"><? echo($mysqlArray["description"]); ?></div>
    <div class="fot">
        <a href="#?type=order&id=<? echo(limit_text($mysqlArray["id"],20)); ?>"><div class="open">Подробнее</div></a>
    </div>
</div>
<style>
    .order{
        width: 40%;
        border-radius: 30px;
        display: flex;
        padding: 20px 30px;
        flex-direction: column;
        justify-content: space-around;
        box-shadow: 0 0 5px rgba(0,0,0,0.5);
        margin: 20px;
    }
    .fot{
        display: flex;
        flex-direction: row-reverse;
    }
    a{
        text-decoration: none;
        color: black;
    }
    .open{
        padding: 10px 15px;
        background-color: coral;
    }
</style>

