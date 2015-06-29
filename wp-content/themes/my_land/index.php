<html>
	
<!-- Mirrored from landing24chasa.ru/agro/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 May 2015 16:49:00 GMT -->
<head>
        <meta charset="utf-8">
        <title><?php bloginfo('name');?></title>
        <link href="<?php bloginfo('template_url');?>/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="http://agro-personal.ru/favicon.png" type="image/png" />
        <link rel="shortcut icon" href="http://agro-personal.ru/favicon.png" type="image/png" />
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">   
        <script src="<?php bloginfo('template_url');?>/ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript">
     
           /**
             * Функция для отправки формы средствами Ajax
             * @author Дизайн студия ox2.ru
             **/
             $(document).on('click','.but-none.submit.form11',function(){

                jQuery.ajax({
                    url: "<?php bloginfo('template_url');?>/mail.php", //Адрес подгружаемой страницы
                    type: "POST", //Тип запроса
                    dataType: "html", //Тип данных
                    data: jQuery("#form_id").serialize()
             

                });

                alert('Спасибо, мы с вами свяжемся!');
                return false;
           



             });
			 
		
			 
 $(function(){
	 	 
        
			 
      $('#form_id2').on('submit', function(e){
	  $('#resume_send_result').html(' ');
		var form = document.forms.form_id2;

            var formData = new FormData(form); 
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php bloginfo('template_url');?>/file_send.php");
            xhr.onreadystatechange = function() {
			  
                if (xhr.readyState == 4) {
				
                    if(xhr.status == 200) {
                        data = xhr.responseText;
					
                        if(data == "true") {
                           $('#resume_send_result').html("Спасибо, мы с вами свяжемся!");
                        } else {
                            $('#resume_send_result').html("Ошибка! Попробуйте позже или отправьте вручную на info@agro-personal.ru");
                        }
                    }
                }
            };

            xhr.send(formData);
		return false;
      });
    });
           
 
   </script>
  	</head>
	<body> 
    	<div class="header-top" style="position:fixed; width:100%; text-align:center;z-index: 10; margin-top:-30px;">
        	<div class="wrap">
            	<ul>
                	<li><a href="#link1">Преимущества</a></li>
                    <li><a href="#link2">Схема работы</a></li>
                    <li><a href="#link3">Выполненные проекты</a></li>
                    <li><a href="#link4">Для соискателей</a></li>
                    <li><a href="#link5">Контакты</a></li>
                </ul>
            </div>
        </div>
        <div class="header-main" style="margin-top:30px;">
        	<div class="wrap">
            	<a href="#" class="header-logo fll">
                	<img src="<?php bloginfo('template_url');?>/images/logo.png" width="83" height="78" alt="" style="padding-top:5px;">
                </a>
                <div class="header-main-ico fll">
                	<div class="header-main-ico-left one fll"></div>
                    <div class="header-main-ico-right">
                    	География<br>поиска<br>кандидатов
                    </div>
                </div>
                <div class="header-main-ico fll">
                	<div class="header-main-ico-left two fll"></div>
                    <div class="header-main-ico-right">
                    	Гарантийное<br>сопровождение 
                    </div>
                </div>
                <div class="header-main-ico fll">
                	<div class="header-main-ico-left three fll"></div>
                    <div class="header-main-ico-right">
                    	Гибкий подход<br>к оценке стоимости<br>проекта
                    </div>
                </div>
                <div class="head-cont flr">
                       <?php echo get_cat_name(9);?><br>
                        <?php echo get_cat_name(10);?>                 
                    </div>               
                <div class="header-call-cont">
                	<a href="#form-block" class="button">Заказать звонок</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    	<div class="main-block">
            <div class="main-b-bot">
                <div class="main-b-bot-min"><?php if(have_posts()):query_posts('p=115');
                    while (have_posts()):the_post(); ?><?php the_title();?><? endwhile; endif; wp_reset_query();?>
                    </div>
				<div class="main-b-bot-big">
        
                    <?php
header('Content-type: text/plain; charset=utf8');

include("SxGeo.php");

function getRealIpAddr() {
      if (!empty($_SERVER['HTTP_CLIENT_IP']))
      { $ip=$_SERVER['HTTP_CLIENT_IP']; }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
      {$ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
      else {$ip=$_SERVER['REMOTE_ADDR']; }
      return $ip;
}



$SxGeo = new SxGeo('SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY); // Самый производительный режим, если нужно обработать много IP за раз

$ip = getRealIpAddr();

$res = $SxGeo->getCityFull($ip);



echo "<Br/>";

echo $res['region']['name_ru'];
//var_export($SxGeo->get($ip));         // Краткая информация о городе или код страны (если используется база SxGeo Country)


?>
            
                </div> </div>
            </div>
        </div>
        <div class="main-face">
        	<div class="wrap">
            	<div class="main-face-text">
                	Нанимать людей через кадровые агентства правильно, прогрессивно<br>и рационально
                </div>
                <div class="main-face-bottom">
                	<div class="main-face-i">«Я такой как все»</div>
                	<b>Олег Тиньков</b> российский предприниматель, один из самых успешных и известных «брендостроителей» в России
                </div>
            </div>
        </div>
        <div class="what-block">
        	<div class="title-block" id="link1"><div class="wrap"><?php echo get_cat_name(2);?></div></div>
            <div class="what-block-in">
                <div class="wrap">
                    <div class="what-block-left fll">
                    	<img src="<?php bloginfo('template_url');?>/images/woman.png" width="460" height="516" alt="">
                        <div class="what-block-l-info">
                        	<div class="what-block-l-info-title"><?php echo get_cat_name(15);?></div>
							<div class="what-block-l-info-title"><?php echo category_description(15);?></div>
                            <div class="what-block-l-tel">
                            	<a href="#form-block" class="button">Заказать звонок</a>
                                <div class="head-cont">
                                    <?php echo get_cat_name(9);?>&nbsp;&nbsp;<?php echo get_cat_name(10);?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="what-block-right">
                    	<div class="what-block-item" style="font-size: 18px;">
                        	<span ><?php if(have_posts()):query_posts('p=123');
                    while (have_posts()):the_post(); ?><?php the_title();?></span><?php the_content();?><? endwhile; endif; wp_reset_query();?>
                        </div>
                        <div class="what-block-item">
                        	<span><?php if(have_posts()):query_posts('p=125');
                    while (have_posts()):the_post(); ?><?php the_title();?></span> <?php the_content();?><? endwhile; endif; wp_reset_query();?>
                        </div>
                        <div class="what-block-item">
                        	<span><?php if(have_posts()):query_posts('p=127');                    while (have_posts()):the_post(); ?><?php the_title();?></span> <?php the_content();?><? endwhile; endif; wp_reset_query();?>
                        </div>
                        <div class="what-block-item">
                        	<span><?php if(have_posts()):query_posts('p=129');                    while (have_posts()):the_post(); ?><?php the_title();?></span> <?php the_content();?><? endwhile; endif; wp_reset_query();?>
                        </div>
                        <div class="what-block-item">
                        	<span><?php if(have_posts()):query_posts('p=131');                    while (have_posts()):the_post(); ?><?php the_title();?></span> <?php the_content();?><? endwhile; endif; wp_reset_query();?>
                        </div>
                        <div class="what-block-item">
                        	<span><?php if(have_posts()):query_posts('p=133');                    while (have_posts()):the_post(); ?><?php the_title();?></span> <?php the_content();?><? endwhile; endif; wp_reset_query();?>
                        </div>
                        <div class="what-block-item">
                        	<span><?php if(have_posts()):query_posts('p=135');                    while (have_posts()):the_post(); ?><?php the_title();?></span> <?php the_content();?><? endwhile; endif; wp_reset_query();?>
                        </div>
                        <div class="what-block-item">
                        	<span><?php if(have_posts()):query_posts('p=137');                    while (have_posts()):the_post(); ?><?php the_title();?></span> <?php the_content();?><? endwhile; endif; wp_reset_query();?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="schema-block">
        	<div class="title-block" id="link2"><div class="wrap"><?php echo get_cat_name(7);?></div></div>
            <div class="schema-block-in">
                <div class="wrap">
					<div class="schema-block-item fll">
                    	<div class="schema-block-i-img fll">
                        	<img src="<?php bloginfo('template_url');?>/images/schema/1.png" alt="">
                        </div>
                        <div class="schema-block-i-txt fll">
                        	<div class="schema-block-i-title"><?php if(have_posts()):query_posts('p=97');
                    while (have_posts()):the_post(); ?>
                    
                    <?php the_title();?></div>
                            <div class="schema-block-i-descr">
                            	<?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>
                            </div>
                        </div>
                    </div>
                    <div class="schema-block-item fll">
                    	<div class="schema-block-i-img fll">
                        	<img src="<?php bloginfo('template_url');?>/images/schema/2.png" alt="">
                        </div>
                        <div class="schema-block-i-txt fll">
                        	<div class="schema-block-i-title"><?php if(have_posts()):query_posts('p=99');
                    while (have_posts()):the_post(); ?>
                    
                    <?php the_title();?></div>
                            <div class="schema-block-i-descr">
                            	<?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>
                            </div>
                        </div>
                    </div>
                    <div class="schema-block-item fll">
                    	<div class="schema-block-i-img fll">
                        	<img src="<?php bloginfo('template_url');?>/images/schema/3.png" alt="">
                        </div>
                        <div class="schema-block-i-txt fll">
                        	<div class="schema-block-i-title"><?php if(have_posts()):query_posts('p=101');
                    while (have_posts()):the_post(); ?>
                    
                    <?php the_title();?></div>
                            <div class="schema-block-i-descr">
                            	<?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>
                            </div>
                        </div>
                    </div>
                    <div class="schema-block-item fll">
                    	<div class="schema-block-i-img fll">
                        	<img src="<?php bloginfo('template_url');?>/images/schema/4.png" alt="">
                        </div>
                        <div class="schema-block-i-txt fll">
                        	<div class="schema-block-i-title"><?php if(have_posts()):query_posts('p=103');
                    while (have_posts()):the_post(); ?>
                    
                    <?php the_title();?></div>
                            <div class="schema-block-i-descr">
                            	<?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>
                            </div>
                        </div>
                    </div>
                    <div class="schema-block-item fll">
                    	<div class="schema-block-i-img fll">
                        	<img src="<?php bloginfo('template_url');?>/images/schema/5.png" alt="">
                        </div>
                        <div class="schema-block-i-txt fll">
                        	<div class="schema-block-i-title"><?php if(have_posts()):query_posts('p=105');
                    while (have_posts()):the_post(); ?>
                    
                    <?php the_title();?></div>
                            <div class="schema-block-i-descr">
                            	<?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>
                            </div>
                        </div>
                    </div>
                    <div class="schema-block-item fll">
                    	<div class="schema-block-i-img fll">
                        	<img src="<?php bloginfo('template_url');?>/images/schema/6.png" alt="">
                        </div>
                        <div class="schema-block-i-txt fll">
                        	<div class="schema-block-i-title">
                             <?php if(have_posts()):query_posts('p=107');
                    while (have_posts()):the_post(); ?>
                    
               
                             <?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>   
                            </div>
                            <div class="schema-block-i-descr">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="callback-bg">
        	<div class="wrap">
            	<div class="callback-bg-in">
                	<a href="#form-block" class="button">Заказать звонок</a>
                </div>
            </div>
        </div>
        <div class="result-block" >
        	<div class="title-block"><div class="wrap"><?php echo get_cat_name(3);?></div></div>
            <div class="result-block-in">
                <div class="wrap">
					<div class="result-block-item fll">
                    	<div class="result-block-i-ico"><img src="<?php bloginfo('template_url');?>/images/ico/1b.png" width="131" height="131" alt=""></div>
                        <div class="result-block-i-title">
                            <?php if(have_posts()):query_posts('p=78');
                    while (have_posts()):the_post(); ?>
                    
                    <?php the_title();?></div>
                        <div class="result-block-i-descr">
                        	<?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>
                        </div>
                    </div>
                    <div class="result-block-item fll">
                    	<div class="result-block-i-ico"><img src="<?php bloginfo('template_url');?>/images/ico/2b.png" width="131" height="131" alt=""></div>
                        <div class="result-block-i-title"><?php if(have_posts()):query_posts('p=80');
                    while (have_posts()):the_post(); ?>
                    
                    <?php the_title();?></div>
                        <div class="result-block-i-descr">
                        	     <?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>
                        </div>
                    </div>
                    <div class="result-block-item fll">
                    	<div class="result-block-i-ico"><img src="<?php bloginfo('template_url');?>/images/ico/3b.png" width="131" height="131" alt=""></div>
                        <div class="result-block-i-title"><?php if(have_posts()):query_posts('p=82');
                    while (have_posts()):the_post(); ?>
                    
                    <?php the_title();?></div>
                        <div class="result-block-i-descr">
                        <?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>
                        	
                        </div>
                    </div>
                    <div class="result-block-item fll">
                    	<div class="result-block-i-ico"><img src="<?php bloginfo('template_url');?>/images/ico/4b.png" width="131" height="131" alt=""></div>
                        <div class="result-block-i-title"><?php if(have_posts()):query_posts('p=84');
                    while (have_posts()):the_post(); ?>
                    
                    <?php the_title();?></div>
                        <div class="result-block-i-descr">
                         <?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>
                        	
                        </div>
                    </div>
                    <div class="result-block-item fll">
                    	<div class="result-block-i-ico"><img src="<?php bloginfo('template_url');?>/images/ico/5b.png" width="131" height="131" alt=""></div>
                        <div class="result-block-i-title"><?php if(have_posts()):query_posts('p=86');
                    while (have_posts()):the_post(); ?>
                    
                    <?php the_title();?></div>
                        <div class="result-block-i-descr">
                         <?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>
                        	
                        </div>
                    </div>
                    <div class="result-block-item fll">
                    	<div class="result-block-i-ico"><img src="<?php bloginfo('template_url');?>/images/ico/6b.png" width="131" height="131" alt=""></div>
                        <div class="result-block-i-title"><?php if(have_posts()):query_posts('p=88');
                    while (have_posts()):the_post(); ?>
                    
                    <?php the_title();?></div>
                        <div class="result-block-i-descr">
                         <?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?><br><br>
                        	
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="form-block" id="form-block">
            <div class="wrap">
                <div class="form-block-in">
                	<div class="form-block-left fll" >
                    	<div class="form-block-l-title"><?php echo get_cat_name(14);?></div>
                        <div class="form-block-l-descr"><?php if(have_posts()):query_posts('p=76');
                    while (have_posts()):the_post(); ?>
                    <?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                    </div>
                    <div class="form-block-right" >
                    	<div class="form-block-r-title">Чтобы обсудить открытые в Вашей<br>компании вакансии, <span>заполните форму:</span></div>
                        <form method="post" action="" id="form_id">
                        	<input type="text" class="text" name="name" value="Имя: ">
                            <input type="text" class="text" name="company" value="Компания: ">
                            <input type="text" class="text" name="hh" value="Вакансия: ">
                            <input type="text" class="text" name="region" value="Регион: ">
                            <input type="text" class="text" name="phone" value="Телефон: ">
                            <input type="text" class="text" name="email" value="E-mail: ">
                            <div class="callback-bg-in">                                
                                <button type="submit" class="but-none submit form11" ><span class="button">Заказать звонок</span></button>
                            </div>
                        </form>
                    </div>
                	<div class="clearfix"></div>
                </div>                
            </div>
        </div>
        <div class="last-block">
        	<div class="title-block" id="link3"><div class="wrap"><?php echo get_cat_name(4);?></div></div>
            <div class="what-block-in last">
                <div class="wrap">
                	<div class="last-block-left fll">
                    	<div class="last-block-item">
                        	<div class="last-block-i-photo fll"><img src="<?php bloginfo('template_url');?>/images/photo/1.png" width="150" height="150" alt=""></div>
                            <div class="last-block-i-right">
                            	<div class="last-block-i-r-title">
                                 <?php if(have_posts()):query_posts('p=20');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?>

                                </div>
                                <div class="last-block-i-r-txt">
                                <?php if(have_posts()):query_posts('p=22');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?>
                                </div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=24');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=26');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=28');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=30');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                            </div>
                        </div>
                        <div class="last-block-item">
                        	<div class="last-block-i-photo fll"><img src="<?php bloginfo('template_url');?>/images/photo/2.png" width="150" height="150" alt=""></div>
                            <div class="last-block-i-right">
                            	<div class="last-block-i-r-title"><?php if(have_posts()):query_posts('p=32');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=34');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=36');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                            </div>
                        </div>
                        <div class="last-block-item">
                        	<div class="last-block-i-photo fll"><img src="<?php bloginfo('template_url');?>/images/photo/3.png" width="150" height="150" alt=""></div>
                            <div class="last-block-i-right">
                            	<div class="last-block-i-r-title"><?php if(have_posts()):query_posts('p=38');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=40');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=42');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=44');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=46');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                            </div>
                        </div>
                    </div>    
                    <div class="last-block-right flr">
                    	<div class="last-block-item">
                        	<div class="last-block-i-photo fll"><img src="<?php bloginfo('template_url');?>/images/photo/4.png" width="150" height="150" alt=""></div>
                            <div class="last-block-i-right">
                            	<div class="last-block-i-r-title"><?php if(have_posts()):query_posts('p=48');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=50');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=52');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=54');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=56');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=58');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                            </div>
                        </div>
                        <div class="last-block-item">
                        	<div class="last-block-i-photo fll"><img src="<?php bloginfo('template_url');?>/images/photo/5.png" width="150" height="150" alt=""></div>
                            <div class="last-block-i-right">
                            	<div class="last-block-i-r-title"><?php if(have_posts()):query_posts('p=60');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=62');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=64');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=66');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                            </div>
                        </div>
                        <div class="last-block-item">
                        	<div class="last-block-i-photo fll"><img src="<?php bloginfo('template_url');?>/images/photo/6.png" width="150" height="150" alt=""></div>
                            <div class="last-block-i-right">
                            	<div class="last-block-i-r-title"><?php if(have_posts()):query_posts('p=68');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=70');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=72');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                                <div class="last-block-i-r-txt"><?php if(have_posts()):query_posts('p=74');
                    while (have_posts()):the_post(); ?>
                    <?php the_title();?>
                    <? endwhile; endif; wp_reset_query();?></div>
                            </div>
                        </div>
                    </div>  
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="slider">
        	<div class="title-block" ><div class="wrap"><?php echo get_cat_name(5);?></div></div>
            <div class="slider-in">
                <div class="wrap">
                	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="item active">
                        	<div class="slider-item">
                            	<img src="<?php bloginfo('template_url');?>/images/temp/<?php echo get_cat_name(26);?>" width="243" height="333" alt="">
                            </div>
                            <div class="slider-item">
                            	<img src="<?php bloginfo('template_url');?>/images/temp/<?php echo get_cat_name(18);?>" width="243" height="333" alt="">
                            </div> 
                            <div class="slider-item">
                            	<img src="<?php bloginfo('template_url');?>/images/temp/<?php echo get_cat_name(19);?>" width="243" height="333" alt="">
                            </div>   
                        </div>                         
                        <div class="item">
							<div class="slider-item">
                            	<img src="<?php bloginfo('template_url');?>/images/temp/<?php echo get_cat_name(20);?>" width="243" height="333" alt="">
                            </div>
                            <div class="slider-item">
                            	<img src="<?php bloginfo('template_url');?>/images/temp/<?php echo get_cat_name(21);?>" width="243" height="333" alt="">
                            </div>
                            <div class="slider-item">
                            	<img src="<?php bloginfo('template_url');?>/images/temp/<?php echo get_cat_name(22);?>" width="243" height="333" alt="">
                            </div> 
                        </div>                         
                        <div class="item">
							<div class="slider-item">
                            	<img src="<?php bloginfo('template_url');?>/images/temp/<?php echo get_cat_name(23);?>" width="243" height="333" alt="">
                            </div>
                            <div class="slider-item">
                            	<img src="<?php bloginfo('template_url');?>/images/temp/<?php echo get_cat_name(24);?>" width="243" height="333" alt="">
                            </div>
                            <div class="slider-item">
                            	<img src="<?php bloginfo('template_url');?>/images/temp/<?php echo get_cat_name(25);?>" width="243" height="333" alt="">
                            </div> 
                        </div>
                      </div>
                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                      </a>
                    </div>
                </div>
            </div>    
        </div>
        <div class="callback-bg2">
        	<div class="wrap">
            	<div class="callback-bg-in">
                	<a href="#form-block" class="button">Заказать звонок</a>
                </div>
            </div>
        </div>
        <div class="soisk">
        	<div class="title-block" id="link4"><div class="wrap"><?php echo get_cat_name(6);?></div></div>
            <div class="soisk-in">
                <div class="wrap">
                	<div class="soisk-title">
                     <?php if(have_posts()):query_posts('p=14');
                    while (have_posts()):the_post(); ?>
                    <?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>

                    </div>
					<div class="soisk-txt">

                    <?php if(have_posts()):query_posts('p=9');
                    while (have_posts()):the_post(); ?>
                    <?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>

                        </div>             
<form ENCTYPE="multipart/form-data"  method="post" action="" name="form_id2" id="form_id2">
<center><input type="file" name="mail_file" style="margin: 0px 0px 20px 50px;"/><center>

<button type="submit" class="but-none submit form22" ><span class="button">Отправить резюме</span></button>
<Br/><span id='resume_send_result'></span>
</form>						
                    
                </div>
            </div>    
        </div>
        <div class="maps-block">
        	<div class="maps-block">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2316.532909021108!2d36.277698799999996!3d54.5064625!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4134bbc3412b165f%3A0x1c8f849ff85e93fb!2z0YPQuy4g0J3QuNC60LjRgtC40L3QsCwgNDIsINCa0LDQu9GD0LPQsCwg0JrQsNC70YPQttGB0LrQsNGPINC-0LHQuy4sIDI0ODAwMg!5e0!3m2!1sru!2sru!4v1431945260724" width="100%" height="508" frameborder="0" style="border:0"></iframe>
            <div class="wrap">                
            	<div class="maps-info">
                    <div class="maps-info-title" id="link5"><?php echo get_cat_name(11);?></div>
                    <div class="maps-info-add"><?php echo get_cat_name(12);?><br>                    <br>
                    
                    Телефоны:<br>
                    <?php echo get_cat_name(9);?><br>
                    <?php echo get_cat_name(10);?><br>
                    <br>
                    
                    E-mail:<br>
                    <?php echo get_cat_name(13);?>
                    </div>
                    <div class="maps-info-bot">
                    	<?php if(have_posts()):query_posts('p=16');
                    while (have_posts()):the_post(); ?>
                    <?php the_content();?>
                    <? endwhile; endif; wp_reset_query();?>
                    </div>
                </div>
        	</div>        
        </div>
        <div class="footer">
        	<div class="wrap">
            	<a href="#" class="header-logo fll" style="margin-top:50px;">
                	<img src="<?php bloginfo('template_url');?>/images/logo.png" width="83" height="78" alt="">
                </a>
                <div class="flr">
                    <div class="head-cont">
                        <?php echo get_cat_name(9);?><br>
                        <?php echo get_cat_name(10);?>                    
                    </div>
                    <a href="#form-block" class="button">Заказать звонок</a>
                </div>    
                <div class="clearfix"></div>
            </div>
        </div>
        <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
	</body>

<!-- Mirrored from landing24chasa.ru/agro/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 May 2015 16:49:33 GMT -->
</html>