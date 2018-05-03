<!doctype html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
<!--    <link href="assets/css/custom.css" rel="stylesheet">-->
    
      
    <!-- Custom styles for this template -->
    
  </head>

  <body>
    <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Главная</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Постоянные договора<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Заявки</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Текучка</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Карта оборудования</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Внести заявку</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>
      </div>
    </nav>
</div>
    <div class="container-fluid pb-2">
<ul class="nav nav-tabs" id="myTab" role="tablist">

    <li class="nav-item">
        <a class="nav-link active h5" id="position-tab" data-toggle="tab" href="#position" role="tab" aria-controls="position" aria-selected="true">Позиции</a>
    </li>
    <li class="nav-item">
        <a class="nav-link h5" id="request-tab" data-toggle="tab" href="#request" role="tab" aria-controls="request" aria-selected="false">Заявки</a>
    </li>
    <div class="col"><button class="btn btn-primary btn-lg btn-block" type="button">Создать заявку</button></div>

</ul>

<!--        <div class="row">-->
<!--            <div class="col"><button class="btn btn-primary btn-lg btn-block" type="button" >Позиции</button></div>-->
<!--            <div class="col"><button class="btn btn-primary btn-lg btn-block" type="button">Заявки</button></div>-->

<!--        </div>-->


   <div class="tab-content" id="mainTabs">
       <div class="tab-pane fade show active" id="position" role="tabpanel" aria-labelledby="position-tab">
            <div class="container-fluid pt-2 pb-2 collapse" id="collapseDescription">
                <div class="row pb-2 d-flex align-items-center h-100">
                            <div class="col-auto ">Дата:</div>
                            <div class="col-3 ">
                                <input type="text" class="form-control" aria-label="pickDate" placeholder="Выберите дату">
                            </div>
                            <div class="col-auto">Заявитель:</div>
                            <div class="col-3">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Кузин А.С.</option>
                                    <option >Склемин С.В.</option>
                                    <option >Степанов А.В.</option>
                                </select>
                            </div>
                </div>
        <!--1 строка        Дата - заявитель  -->
                <div class="row pb-2 d-flex align-items-center h-100">
                            <div class="col-auto">Наименование:</div>
                            <div class="col"><input type="text" class="form-control" aria-label="nameDetail" placeholder="Введите наименование"></div>
                </div>
        <!--2 строка        Наименование -->
                <div class="row pb-2 d-flex align-items-center h-100">
                    <div class="col-auto">Полное наименование:</div>
                </div>
        <!--3 строка        Полное наименование -->
                <div class="row pb-2 d-flex align-items-center h-100">
                    <div class="col-12 input-group">
                       <textarea class="form-control" placeholder="Введите полное наименование..." aria-label="fullName"></textarea>
                    </div>
                </div>
        <!--4 строка Полное наименование текст        -->
                <div class="row pb-2 d-flex align-items-center h-100">
                    <div class="col-auto">Место установки:</div>
                    <div class="col "><input type="text" class="form-control" aria-label="montagePlace" placeholder="Место установки..."></div>
                </div>
        <!--5 строка Место установки        -->
                <div class="row pb-2 d-flex align-items-center h-100">
                    <div class="col-auto">Единицы:</div>
                    <div class="col-3 ">
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>шт.</option>
                            <option >кг.</option>
                            <option >компл.</option>
                            <option >м.</option>
                        </select>
                    </div>
                    <div class="col-auto">Кол-во:</div>
                    <div class="col-3 ">
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>1</option>
                            <option >2</option>
                            <option >3</option>
                            <option >4</option>
                        </select>
                        <!--Заменить на счётчик                    -->
                    </div>
                </div>
        <!--6 строка единицы кол-во        -->
                <div class="row pb-2 d-flex align-items-center h-100">
                    <div class="col-auto">Пункт плана:</div>
                    <div class="col">
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>1-1-1</option>
                            <option >1-1-2</option>
                            <option >1-1-3</option>
                            <option >1-1-4</option>
                        </select>

                    </div>
                </div>
        <!--7 строка п.п.        -->
                <div class="row pb-2 d-flex align-items-center h-100">
                    <div class="col-auto">Наименование пункта плана:</div>
                </div>
        <!--8 строка п.п.        -->
                <div class="row pb-2 d-flex align-items-center h-100">
                    <div class="col-12 input-group">
                        <textarea class="form-control" placeholder="Введите наименование пункта плана..." aria-label="fullName"></textarea>
                    </div>
                </div>
        <!--9 строка п.п.        -->
                <div class="row pb-2 d-flex align-items-center h-100">
                    <div class="col-auto">Статус заявки:</div>
                    <div class="col">
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>в работе</option>
                            <option >создана</option>
                            <option >напечатана</option>
                            <option >пришло</option>
                        </select>
                    </div>
                </div>
        <!--10 строка статус        -->
                <div class="row">
                    <div class="col-6"><button class="btn btn-success btn-sm btn-block" type="button">Подтвердить</button></div>
                    <div class="col-6"><button class="btn btn-warning btn-sm btn-block" type="button">Отмена</button></div>
                </div>



            </div>
            <div class="row">
                <div class="col-4"><button class="btn btn-secondary btn-lg btn-block" type="button" data-toggle="collapse" data-target="#collapseDescription" aria-expanded="false" aria-controls="collapseDescription">Добавить позицию</button></div>
                <div class="col-4"><button class="btn btn-secondary btn-lg btn-block" type="button" data-toggle="collapse" data-target="#collapseDescription" aria-expanded="false" aria-controls="collapseDescription">Изменить позицию</button></div>
                <div class="col-4"><button class="btn btn-secondary btn-lg btn-block" type="button" data-toggle="collapse" data-target="#collapseDescription" aria-expanded="false" aria-controls="collapseDescription">Дублировать позицию</button></div>
            </div>
            <div class="container-fluid">
                     <table class="table table-hover table-responsive table-sm">
                           <thead>
                            <tr class="text-center">
                                <th scope="col" >№</th>
                                <th scope="col" >Дата</th>
                                <th scope="col" >Заявитель</th>
                                <th scope="col" >Наименование</th>
                                <th scope="col" >Полное наименование</th>
                                <th scope="col" >Место установки</th>
                                <th scope="col" >Ед.</th>
                                <th scope="col" >Кол.</th>
                                <th scope="col" >п.плана</th>
                                <th scope="col" >Наим. п.п.</th>
                                <th scope="col" >Статус заявки </th>
                            </tr>
                           </thead>
                           <tbody>
                           <tr >
                               <th scope="row" >1000</th>
                                   <td >26.04.1990</td>
                                   <td >Кузин А.С.</td>
                                   <td >Светильник светодиодный</td>
                                   <td class="text-left">Светильник светодиодный ДВО-7w 4000K 700Лм квадратный slim белый (944555) ETM675656</td>
                                   <td >уч. упаковки</td>
                                   <td >шт.</td>
                                   <td >10</td>
                                   <td >1-1-10</td>
                                   <td >Покупка комплектующих холодильного оборудования кондиционеров</td>
                                   <td >в работе</td>

                           </tr>
                           <tr >
                               <th scope="row" >1000</th>
                                   <td >26.04.1990</td>
                                   <td >Кузин А.С.</td>
                                   <td >Светильник светодиодный</td>
                                   <td >Светильник светодиодный ДВО-7w 4000K 700Лм квадратный slim белый (944555) ETM675656</td>
                                   <td >уч. упаковки</td>
                                   <td >шт.</td>
                                   <td >10</td>
                                   <td >1-1-10</td>
                                   <td >Покупка комплектующих холодильного оборудования кондиционеров</td>
                                   <td >в работе</td>

                           </tr>


                            <tr >
                                <th scope="row" >1000</th>
                                    <td >26.04.1990</td>
                                    <td >Кузин А.С.</td>
                                    <td >Светильник светодиодный</td>
                                    <td >Светильник светодиодный ДВО-7w 4000K 700Лм квадратный slim белый (944555) ETM675656</td>
                                    <td >уч. упаковки</td>
                                    <td >шт.</td>
                                    <td >10</td>
                                    <td >1-1-10</td>
                                    <td >Покупка комплектующих холодильного оборудования кондиционеров</td>
                                    <td >в работе</td>

                            </tr>
                           </tbody>
                        </table>
                </div>
       </div>
       <div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">
<!--Test line add content-->
           <div class="row">
               <div class="col"><button class="btn btn-primary btn-lg btn-block" type="button">Отправить почтой</button></div>
               <div class="col"><button class="btn btn-primary btn-lg btn-block" type="button">Печать</button></div>
           </div>
<!--           <div class="container-fluid bg-danger" style="width: 100%; height: 100px"></div>-->
       </div>
   </div>
    </div>

    <div class="footer text-center">
        <div class="container">
            <div class="row" >
                <div class="col-12">
                    <span class="text-muted">AlexMorris</span>
                </div>
            </div>
        </div>
    </div>

   <script src="assets/js/main.js"></script>
    <script>
    //   var clampHeight = $('.clampThis').parent().height;

</script>

  </body>
</html>