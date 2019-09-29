<div class="work">
    <div class="main">
        <div class="orders">

            <div class="menu">
                <div class="btn my">Мои заказы</div>
                <div class="btn all">Все заказы</div>
            </div>
            <div class="content my">
            </div>
            <div class="content all">
                <?php
                $querry = "SELECT * FROM orders";
                $mysqli_result = mysqli_query($db, $querry);
                while ($mysqlArray = mysqli_fetch_array($mysqli_result)) {
                    $querry = "SELECT id, login FROM users WHERE id='" . $mysqlArray["user_id"] . "'";
                    $mysqli_result2 = mysqli_query($db, $querry);
                    $mysqlArray2 = mysqli_fetch_array($mysqli_result2);
                    include("modules/order_out.php");
                }
                ?>
            </div>
        </div>
    </div>
</div>
<style>
    .content {
        display: none;
        background-color: white;
        height: 50vh;
        border-radius: 30px;
        padding: 20px;
        flex-direction: row;
        flex-flow: row wrap;
        justify-content: space-around;
        overflow-y: scroll;
        flex-wrap: wrap;
    }

    .work {
        width: 90%;
        height: 70vh;
        display: flex;
        flex-direction: column;
        margin: 0 auto;
    }

    .menu {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin: 20px 0;
    }

    .menu > .btn {
        width: 40%;
        padding: 20px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        background-color: white;
        border-radius: 30px;
        cursor: pointer;
    }

    .menu > .btn:hover {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
        background-color: beige;
    }

    .selected {
        display: flex;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
    }
</style>
<script>
    $(document).ready(function () {
        $('.my').addClass('selected')
        $(".menu>.all").on('click', function () {
            $(".btn").removeClass('selected');
            $(".content").removeClass('selected');
            $('.all').addClass('selected');
        })
        $(".menu>.my").on('click', function () {
            $(".btn").removeClass('selected');
            $(".content").removeClass('selected');
            $('.my').addClass('selected');
        })
    })
</script>