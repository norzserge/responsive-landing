jQuery(function ($) {
	var contact = {
		message: null,
		init: function () {
			$('.contact').click(function (e) {
				e.preventDefault();
				$.get("../contact.php", function(data){
					$(data).modal({
						closeHTML: "<a href='#' title='Закрыть' class='modal-close'><i class='fa fa-times' aria-hidden='true'></i></a>",
						position: ["15%",],
						overlayId: 'contact-overlay',
						containerId: 'contact-container',
						onOpen: contact.open,
						onShow: contact.show,
						onClose: contact.close
					});
				});
			});
		},
		open: function (dialog) {
			if ($.browser.mozilla) {
				$('#contact-container .contact-button').css({'padding-bottom': '2px'});
			}
			if ($.browser.safari) {
				$('#contact-container .contact-input').css({'font-size': '.9em'});
			}
			var h = 470;
			if ($('#contact-subject').length) {h += 26;}
			if ($('#contact-cc').length) {h += 22;}
			var title = $('#contact-container .contact-title').html();
			$('#contact-container .contact-title').html('Загрузка...');
			dialog.overlay.fadeIn(200, function () {
				dialog.container.fadeIn(200, function () {
					dialog.data.fadeIn(200, function () {
						$('#contact-container .contact-content').animate({
							height: h
						}, function () {
							$('#contact-container .contact-title').html(title);
							$('#contact-container form').fadeIn(200, function () {
								$('#contact-container #contact-name').focus();
								$('#contact-container .contact-cc').click(function () {
									var cc = $('#contact-container #contact-cc');
									cc.is(':checked') ? cc.attr('checked', '') : cc.attr('checked', 'checked');
								});
								if ($.browser.msie && $.browser.version < 7) {
									$('#contact-container .contact-button').each(function () {
										if ($(this).css('backgroundImage').match(/^url[("']+(.*\.png)[)"']+$/i)) {
											var src = RegExp.$1;
											$(this).css({
												backgroundImage: 'none',
												filter: 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src="' +  src + '", sizingMethod="crop")'
											});
										}
									});
								}
							});
						});
					});
				});
			});
		},
		show: function (dialog) {
			$('#contact-container .contact-send').click(function (e) {
				e.preventDefault();
				if (contact.validate()) {
					var msg = $('#contact-container .contact-message');
					msg.fadeOut(function () {
						msg.removeClass('contact-error').empty();
					});
					$('#contact-container .contact-title').html('Отправка...');
					$('#contact-container form').fadeOut(200);
					$('#contact-container .contact-content').animate({
						height: '80px'
					}, function () {
						$('#contact-container .contact-loading').fadeIn(200, function () {
							$.ajax({
								url: '../contact.php',
								data: $('#contact-container form').serialize() + '&action=send',
								type: 'post',
								cache: false,
								dataType: 'html',
								success: function (data) {
									$('#contact-container .contact-loading').fadeOut(200, function () {
										$('#contact-container .contact-title').html('Спасибо!');
										msg.html(data).fadeIn(200);
									});
								},
								error: contact.error
							});
						});
					});
				}
				else {
					if ($('#contact-container .contact-message:visible').length > 0) {
						var msg = $('#contact-container .contact-message div');
						msg.fadeOut(200, function () {
							msg.empty();
							contact.showError();
							msg.fadeIn(200);
						});
					}
					else {
						$('#contact-container .contact-message').animate({
							height: '30px'
						}, contact.showError);
					}	
				}
			});
		},
		close: function (dialog) {
			$('#contact-container .contact-message').fadeOut();
			$('#contact-container .contact-title').html('Завершение...');
			$('#contact-container form').fadeOut(200);
			$('#contact-container .contact-content').animate({
				height: 40
			}, function () {
				dialog.data.fadeOut(200, function () {
					dialog.container.fadeOut(200, function () {
						dialog.overlay.fadeOut(200, function () {
							$.modal.close();
						});
					});
				});
			});
		},
		error: function (xhr) {
			alert(xhr.statusText);
		},
		validate: function () {
			contact.message = '';
			if (!$('#contact-container #contact-name').val()) {
				contact.message += 'Введите имя. ';
			}
			var email = $('#contact-container #contact-email').val();
			if (!email) {
				contact.message += 'Введите E-mail. ';
			}
			else {
				if (!contact.validateEmail(email)) {
					contact.message += 'E-mail введен неверно. ';
				}
			}
			if (!$('#contact-container #contact-message').val()) {
				contact.message += 'Введите сообщение. ';
			}
			if (contact.message.length > 0) {
				return false;
			}
			else {
				return true;
			}
		},
		validateEmail: function (email) {
			var at = email.lastIndexOf("@");
			if (at < 1 || (at + 1) === email.length)
				return false;
			if (/(\.{2,})/.test(email))
				return false;
			var local = email.substring(0, at);
			var domain = email.substring(at + 1);
			if (local.length < 1 || local.length > 64 || domain.length < 4 || domain.length > 255)
				return false;
			if (/(^\.|\.$)/.test(local) || /(^\.|\.$)/.test(domain))
				return false;
			if (!/^"(.+)"$/.test(local)) {
				if (!/^[-a-zA-Z0-9!#$%*\/?|^{}`~&'+=_\.]*$/.test(local))
					return false;
			}
			if (!/^[-a-zA-Z0-9\.]*$/.test(domain) || domain.indexOf(".") === -1)
				return false;	
			return true;
		},
		showError: function () {
			$('#contact-container .contact-message')
				.html($('<div class="contact-error"></div>').append(contact.message))
				.fadeIn(200);
		}
	};
	contact.init();
});