<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
<title>
    Career
</title>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="well" style="margin-top: 0%; background-color:lightgrey">
            <h4 style="text-align: center;">Данные для обратной связи</h4>
            <form role="form" id="contactForm"  class="shake" action="sendregistration/send_reg" method="POST" enctype="multipart/form-data">
                <!-- Имя -->
                <div class="row">
                    <div class="form-group col-md-10 col-md-offset-1">
                        <label for="name" class="h4">Имя</label>
                        <input name="user_name" type="text" class="form-control" id="name" placeholder="Введите свое имя" data-error="Забыли как вас зовут?" required pattern="^[А-Яа-яЁё\s]+$">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <!--Название компании-->
                <div class="row">
                    <div class="form-group col-md-10 col-md-offset-1">
                        <label for="age" class="h4">Название компании</label>
                        <input name="user_age" type="text" class="form-control" id="age" placeholder="Введите название вашей компании" data-error="Забыли телефон?" required pattern="^[ 0-9]+$" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>


                <!--Телефон-->
                <div class="row">
                    <div class="form-group col-md-10 col-md-offset-1">
                        <label for="age" class="h4">Телефон</label>
                        <input name="user_age" type="text" class="form-control" id="age" placeholder="Введите номер вашего телефона" data-error="Забыли телефон?" required pattern="^[ 0-9]+$" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <!--e-mail-->
                <div class="row">
                    <div class="form-group col-md-10 col-md-offset-1">
                        <label for="age" class="h4">Ваш E-mail</label>
                        <input name="user_age" type="text" class="form-control" id="age" placeholder="Введите ваш e-mail" data-error="Забыли телефон?" required pattern="^[ 0-9]+$" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>


                <!--Кнопка-->
                <div class="row">
                    <div class="form-group col-md-10 col-md-offset-1">
                        <input type="submit" class="col-xs-12 btn btn-md btn-success" value="Отправить" name="">
                    </div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>