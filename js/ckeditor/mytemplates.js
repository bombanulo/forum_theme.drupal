// Register a template definition set named "default".
CKEDITOR.addTemplates( 'default',
{
	// The name of the subfolder that contains the preview images of the templates.
	imagesPath : CKEDITOR.getUrl( CKEDITOR.plugins.getPath( 'templates' ) + 'templates/images/' ),
 
	// Template definitions.
	templates :
		[
			{
				title: 'Вставить табы',
				//image: 'template1.gif',
				description: 'По умолчанию создаётся три таба: каждому li соответствует div p.',
				html:
					'<div class="tabs">'+
						'<ul class="tabs-nav">'+
							'<li class="active">Вкладка 1</li>'+
							'<li>Вкладка 2</li>'+
							'<li>Вкладка 3</li>'+
						'</ul>'+
						'<div class="tabs-box">'+
							'<div class="active"><p>Содержимое вкладки 1 любой контент, текст, картинки или видео, а может и всё сразу...</p></div>'+
							'<div><p>Содержимое вкладки 2 любой контент, текст, картинки или видео, а может и всё сразу...</p></div>'+
							'<div><p>Содержимое вкладки 3 любой контент, текст, картинки или видео, а может и всё сразу...</p></div>'+
						'</div>'+
					'</div>'
			},
			
			{
				title: 'Врез справа',
				html:
					'<div class="vreztxtbox"><h4>Заголовок, при необходимости</h4><p>Текст, картинка, ссылки на доп материалы</p></div>'
			},
			
			{
				title: 'Таблица вариант 1',
				description: 'Таблица с прокруткой в случае не влезания по ширине, оформлена в стиле шаблона',
				html:
					'<div class="tablecontainer">'+
						'<table class="tblvar1">'+
							'<tbody>'+
								'<tr><th>Заголовок 1</th><th>Заголовок 2</th><th>Заголовок 3</th><th><p>Заголовок 4</p></th><th><p>Заголовок 5</p></th></tr>'+
								'<tr><td>Текст</td><td>1</td><td>2</td><td>3</td><td>4</td></tr>'+
								'<tr><td>Текст</td><td>8</td><td>7</td><td>6</td><td>5</td></tr>'+
							'</tbody>'+
						'</table>'+
					'</div>'
			},
			{
				title: 'Кнопка-ссылка',
				html:
						'<p>Type your text here.</p>'
			},
		]
});