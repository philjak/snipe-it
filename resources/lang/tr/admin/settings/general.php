<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory etki alanı',
    'ad_domain_help'			=> 'Mail etki alanı gibidir fakat her zaman aynı olmayabilir.',
    'ad_append_domain_label'    => 'Alan adını sonuna ekle',
    'ad_append_domain'          => 'Alan adını kullanıcı adının sonuna ekle',
    'ad_append_domain_help'     => 'Kullanıcı "kullanıcıadı@alan.adı" yazmak zorunda değil, bunun yerine "kullanıcıadı" yazabilir.',
    'admin_cc_email'            => 'CC e-Posta',
    'admin_cc_email_help'       => 'Kullanıcılar bir ek e-posta hesabına gönderilen iade etme/kullanıma alma e-posta bir kopyasını göndermek isterseniz, buraya girin. Aksi takdirde bu alanı boş bırakın.',
    'is_ad'				        => 'Active Directory sunucusudur',
    'alerts'                	=> 'Uyarı',
    'alert_title'               => 'Günceleme Uyarı Ayarları',
    'alert_email'				=> 'Uyarıları gönder',
    'alert_email_help'    => 'Uyarıların gönderileceği mail adresini yazınız. Virgül ile ayırarak farklı mailler de yazabilirsiniz',
    'alerts_enabled'			=> 'Uyarılar etkinleştirildi',
    'alert_interval'			=> 'Uyarı bitiş zamanı (gün içinde)',
    'alert_inv_threshold'		=> 'Son uyarı zamanı',
    'allow_user_skin'           => 'Kullanıcı temasına izin ver',
    'allow_user_skin_help_text' => 'Bu kutuyu işaretlemek, kullanıcının UI kaplamasını farklı bir kaplamayla geçersiz kılmasına olanak tanır.',
    'asset_ids'					=> 'Demirbaş No',
    'audit_interval'            => 'Denetim Aralığı',
    'audit_interval_help'       => 'Varlıklarınızı düzenli olarak fiziksel olarak denetlemeniz gerekiyorsa, kullandığınız aralığı ay olarak girin. Bu değeri güncellerseniz, denetim tarihi yaklaşan varlıklar için tüm "sonraki denetim tarihleri" güncellenir.',
    'audit_warning_days'        => 'Denetim Uyarı Eşiği',
    'audit_warning_days_help'   => 'Mal varlığının denetime tabi olması gerektiği zaman sizi kaç gün öncesinden uyarmalıyız?',
    'auto_increment_assets'		=> 'Otomatik olarak artan varlık etiketi oluşturun',
    'auto_increment_prefix'		=> 'Ünvan (opsiyonel)',
    'auto_incrementing_help'    => 'Bunu ayarlamak için önce otomatik artan varlık etiketlerini etkinleştirin',
    'backups'					=> 'Yedekler',
    'backups_help'              => 'Yedekler oluşturun, indirin ve geri yükleyin ',
    'backups_restoring'         => 'Yedekten geri dön',
    'backups_upload'            => 'Yedeği yükle',
    'backups_path'              => 'Yedeklerin sunucuda saklanacağı yer <code>:path</code>',
    'backups_restore_warning'   => 'Geri yükleme butonunu kullanın <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> önceki yedeklemelerden (Şu anda "S3 file storage" yada "Docker" çalışmıyor.<br><br>Sizin<strong>entire :app_name Veritabanı yüklediğiniz dosyalarla değiştirilecektir.</strong>.  ',
    'backups_logged_out'         => 'Geri yüklemeniz tamamlandıktan sonra, siz de dahil olmak üzere, tüm mevcut kullanıcıların oturumu kapatılacaktır.',
    'backups_large'             => 'Çok büyük yedeklemeler, geri yükleme girişiminde zaman aşımına uğrayabilir ve komut satırı üzerinden çalıştırılması gerekebilir. ',
    'barcode_settings'			=> 'Barkod Ayarları',
    'confirm_purge'			    => 'Temizleme Onayı',
    'confirm_purge_help'		=> 'Silinmiş kayıtlarınızı temizlemek için aşağıdaki kutuya "DELETE" yazın. Bu işlem geri alınamaz ve silinmiş tüm eşya ve kullanıcılar KALICI OLARAK silinir. (Güvende olabilmek için öncelikle bir yedek almalısınız.)',
    'custom_css'				=> 'Özel CSS',
    'custom_css_help'			=> 'Kullanmak istediğiniz özel CSS geçersiz. &lt;style&gt;&lt;/style&gt; etiketlerini kullanmayın.',
    'custom_forgot_pass_url'	=> 'Özel Parola Sıfırlama URL\'si',
    'custom_forgot_pass_url_help'	=> 'Burası, oturum açma ekranında yer alan unutulmuş şifre URL\'sinin yerini alır, kullanıcıları dahili veya barındırılan LDAP parola sıfırlama fonksiyonuna yönlendirmek için kullanışlıdır. Yerel kullanıcıların unuttuğu şifre işlevselliğini etkili bir şekilde devre dışı bırakacaktır.',
    'dashboard_message'			=> 'Kontrol Paneli Mesajı',
    'dashboard_message_help'	=> 'Bu metin kontrol panelini görme yetkisi olan herkes tarafından görüntülenir.',
    'default_currency'  		=> 'Varsayılan Para Birimi',
    'default_eula_text'			=> 'Varsayılan Sözleşme',
    'default_language'			=> 'Varsayılan Dil',
    'default_eula_help_text'	=> 'Özel Demirbaş Kategorileri için özel Son Kullanıcı Lisans Sözleşmesi ilişkilendirebilirsiniz.',
    'display_asset_name'        => 'Demirbaş Adı Göster',
    'display_checkout_date'     => 'Çıkış Tarihi Göster',
    'display_eol'               => 'Tablo görüntüsünde Sözleşmeyi görüntüle',
    'display_qr'                => 'QR Kodu Göster',
    'display_alt_barcode'		=> '1D Barkodu Göster',
    'email_logo'                => 'E-posta logosu',
    'barcode_type'				=> '2D Barkod Türü',
    'alt_barcode_type'			=> '1D Barkod Türü',
    'email_logo_size'       => 'E-posta iletilerinde kare biçimli logolar önerilir. ',
    'enabled'                   => 'Etkin',
    'eula_settings'				=> 'Son Kullanıcı Lisans Sözleşmesi Ayarları',
    'eula_markdown'				=> 'This EULA allows <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Kabul edilebilir dosya türleri ico, png ve gif uzantılı dosyalardır. Diğer türden dosyaların tarayıcı uyumluluğu kesin değildir.',
    'favicon_size'          => 'Simgesel belirtecin büyüklüğü 16x16 piksel kare şeklinde olmalıdır.',
    'footer_text'               => 'Ek Altbilgi Metni ',
    'footer_text_help'          => 'Bu metin altbilginin sağ köşesinde görünür. Linklerde <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a> şeklinde kullanıma izin verilir. Satır sonu, satır başı, resimler vb. gibi içerikler beklenmeyen sonuçlara sebep olabilir.',
    'general_settings'			=> 'Genel Ayarlar',
    'general_settings_keywords' => 'şirket desteği, imza, kabul, e-posta formatı, kullanıcı adı formatı, resimler, sayfa başına, küçük resim, eula, tos, gösterge tablosu, gizlilik',
    'general_settings_help'     => 'Varsayılan EULA ve fazlası',
    'generate_backup'			=> 'Yedek Oluştur',
    'header_color'              => 'Başlık rengi',
    'info'                      => 'Bu ayarlardan kurulum görünüşünüzü kişiselleştirebilirsiniz.',
    'label_logo'                => 'Etiket Logosu',
    'label_logo_size'           => 'En güzel görünen logolar kare şeklindeki logolardır - her ürün etiketinin sağ üst bölümünde görüntülenir. ',
    'laravel'                   => 'Laravel Version',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Varsayılan İzinler Grubu',
    'ldap_default_group_info'   => 'Yeni senkronize edilen kullanıcılara atamak için bir grup seçin. Bir kullanıcının atandığı grubun izinlerini aldığını unutmayın.',
    'no_default_group'          => 'Varsayılan Grup Yok',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP İstemci Tarafı TLS anahtarı',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Sertifikası',
    'ldap_enabled'              => 'LDAP etkin',
    'ldap_integration'          => 'LDAP Entegrasyonu',
    'ldap_settings'             => 'LDAP Ayarları',
    'ldap_client_tls_cert_help' => 'LDAP bağlantıları için İstemci Tarafı TLS Sertifikası ve Anahtarı, genellikle yalnızca "Güvenli LDAP" içeren Google Workspace yapılandırmalarında kullanışlıdır. Her ikisi de gereklidir.',
     'ldap_client_tls_key'       => 'LDAP İstemci tarafı TLS anahtarı',
    'ldap_login_test_help'      => 'LDAP ayarlarınızı doğru yapılandırıp yapılandırmadığınızı test etmek yukarıda belirttiğiniz DN için geçerli bir LDAP kullanıcı adı ve parolası giriniz. ÖNCE GÜNCEL LDAP AYARLARINI KAYDETMELİSİN.',
    'ldap_login_sync_help'      => 'Bu sadece LDAP\'ın doğru şekilde senkron edilebildiğini test eder. Eğer LDAP Kimlik Doğrulama sorgunuz doğru değilse, kullanıcılar giriş yapamayabilirler. ÖNCE GÜNCEL LDAP AYARLARINI KAYDETMELİSİN.',
    'ldap_manager'              => 'LDAP Yöneticisi',
    'ldap_server'               => 'LDAP Sunucu',
    'ldap_server_help'          => 'ldap:// (şifrelenmemiş veya TLS) veya ldaps:// (SSL için) ile başlamalıdır',
    'ldap_server_cert'			=> 'LDAP SSL sertifikası doğrulama',
    'ldap_server_cert_ignore'	=> 'Geçersiz SSL sertifikası kabul et',
    'ldap_server_cert_help'		=> 'Kendinden imzalı bir SSL sertifikası kullanıyorsanız ve geçersiz bir SSL sertifikası kabul etmek istiyorsanız bu onay kutusunu seçin.',
    'ldap_tls'                  => 'TLS Kullan',
    'ldap_tls_help'             => 'Yalnızca LDAP sunucunuzda STARTTLS çalıştırıyorsanız bu kutuyu işaretleyin. ',
    'ldap_uname'                => 'LDAP Bind Kullanıcı Adı',
    'ldap_dept'                 => 'LDAP Departman',
    'ldap_phone'                => 'LDAP Telefon Numarası',
    'ldap_jobtitle'             => 'LDAP İş Unvanı',
    'ldap_country'              => 'LDAP Ülke',
    'ldap_pword'                => 'LDAP Bind Parola',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP filtre',
    'ldap_pw_sync'              => 'LDAP Parola Senkronu',
    'ldap_pw_sync_help'         => 'LDAP şifrelerinin yerel parolalarla senkronize edilmesini istemiyorsanız, bu onay kutusunun işaretini kaldırın. Bu durumun devre dışı bırakılması, LDAP sunucunuza herhangi bir nedenle ulaşılamazsa, kullanıcılarınızın oturum açamayabileceği anlamına gelir.',
    'ldap_username_field'       => 'Kullanıcı Adı Alanı',
    'ldap_lname_field'          => 'Soyadı',
    'ldap_fname_field'          => 'LDAP adı',
    'ldap_auth_filter_query'    => 'LDAP kimlik doğrulama sorgu',
    'ldap_version'              => 'LDAP versiyon',
    'ldap_active_flag'          => 'LDAP etkin bayrak',
    'ldap_activated_flag_help'  => 'Bu değer, senkronize edilmiş bir kullanıcının Snipe-IT\'de oturum açıp açamayacağını belirlemek için kullanılır. Girdiğiniz değer AD/LDAP tarafındaki Attribute ismi ile aynı olmamalı. Bu alana girdiğiniz değer AD/LDAP üzerinde yok ise veya değeri 0 ise kullanıcı girişi devre dışı kalacaktır. Eğer Attribute değeri 1, true yada başka bir metin ise kullanıcı girişine izin verilecektir. Eğer Attribute değeri boş bırakılmış ve kullanıcı askıya alınmamış ise userAccountControl ayarı esas alınacaktır.',
    'ldap_emp_num'              => 'LDAP Çalışan Numarası',
    'ldap_email'                => 'LDAP Mail',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'LDAP Senkronizasyonunu test et',
    'license'                   => 'Yazılım Lisansı',
    'load_remote_text'          => 'Uzak Komut dosyaları',
    'load_remote_help_text'		=> 'Bu Snipe-IT kurulumu dış ortamdan scriptler yükleyebilir.',
    'login'                     => 'Giriş Denemesi',
    'login_attempt'             => 'Giriş Denemesi',
    'login_ip'                  => 'İp adresi',
    'login_success'             => 'Başarılı?',
    'login_user_agent'          => 'Kullanıcı Aracısı',
    'login_help'                => 'Giriş Denemeleri Listesi',
    'login_note'                => 'Giriş Notu',
    'login_note_help'           => 'İsteğe bağlı olarak, kaybolan veya çalınan bir cihaz bulan kişilere yardımcı olması için giriş ekranınıza birkaç cümle ekleyin. Bu alan <a href="https://help.github.com/articles/github-flavored-markdown/">Github aromalı markdown</a> kabul eder',
    'login_remote_user_text'    => 'Uzak Kullanıcı oturum açma seçenekleri',
    'login_remote_user_enabled_text' => 'Uzak Kullanıcı başlığı ile Login etkinleştirmek',
    'login_remote_user_enabled_help' => 'Bu seçenek, "Ortak Ağ Geçidi Arabirimi (rfc3875)" göre REMOTE_USER başlığı aracılığıyla kimlik doğrulaması sağlar',
    'login_common_disabled_text' => 'Diğer kimlik doğrulama mekanizmalarını devre dışı bırakma',
    'login_common_disabled_help' => 'Bu seçenek diğer kimlik doğrulama mekanizmalarını devre dışı bırakır. Sadece REMOTE_USER giriş bilgilerinizi zaten çalıştığından eminseniz bu seçeneği etkinleştirin',
    'login_remote_user_custom_logout_url_text' => 'Özel oturum kapatma URL',
    'login_remote_user_custom_logout_url_help' => 'Burada bir URL verilirse, kullanıcı Snipe-IT oturumunu kapattıktan sonra kullanıcılar bu URL\'ye yönlendirilir. Bu, Kimlik Doğrulama sağlayıcınızın kullanıcı oturumlarını doğru bir şekilde kapatmak için kullanışlıdır.',
    'login_remote_user_header_name_text' => 'Özelleştirilmiş kullanıcı adı başlığı',
    'login_remote_user_header_name_help' => 'REMOTE_USER yerine belirtilen başlığı kullanın',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Yazdırmada Kullan',
    'logo_print_assets_help'    => 'Yazdırılabilir varlık listelerinde marka kullan ',
    'full_multiple_companies_support_help_text' => 'Kısıtlı kullanıcılar Firmaların varlıkları için firmalara atanmıştır.',
    'full_multiple_companies_support_text' => 'Birden Fazla Şirket Desteği',
    'show_in_model_list'   => 'Model açılır menüsünde göster',
    'optional'					=> 'İsteğe bağlı',
    'per_page'                  => 'Sayfa başına sonuç sayısı',
    'php'                       => 'PHP Versiyonu',
    'php_info'                  => 'PHP Bilgisi',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'QR Kodlarını görüntülemek için php-gd yüklemelisiniz, kurulum talimatlarına bakınız.',
    'php_gd_warning'            => 'PHP Image Processing ve GD eklentileri yüklü değil.',
    'pwd_secure_complexity'     => 'Şifre Karmaşıklığı',
    'pwd_secure_complexity_help' => 'Hangi şifre karmaşıklığı kurallarını uygulamak istediğinizi seçin.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Şifre, ad, soyad, e-posta veya kullanıcı adıyla aynı olamaz',
    'pwd_secure_complexity_letters' => 'En az bir harf gerekir',
    'pwd_secure_complexity_numbers' => 'En az bir numara gerekir',
    'pwd_secure_complexity_symbols' => 'En az bir sembol gerekir',
    'pwd_secure_complexity_case_diff' => 'En az bir büyük birde küçük harf gerekir',
    'pwd_secure_min'            => 'Şifre minimum karakterleri',
    'pwd_secure_min_help'       => 'En kısa izin verilen değer 8',
    'pwd_secure_uncommon'       => 'Ortak şifreleri önle',
    'pwd_secure_uncommon_help'  => 'Bu, kullanıcıların ihlallerde bildirilen ilk 10.000 şifrelerden ortak şifreler kullanmasına izin vermez.',
    'qr_help'                   => 'Bu işlemi gerçekleştirmek için önce QR Kodlarını etkinleştirin',
    'qr_text'                   => 'QR Kodu Yazısı',
    'saml'                      => 'SAML',
    'saml_title'                => 'SAML ayarlarını güncelle',
    'saml_help'                 => 'SAML ayarları',
    'saml_enabled'              => 'SAML etkinleştirildi',
    'saml_integration'          => 'SAML Entegrasyonu',
    'saml_sp_entityid'          => 'Varlık Kimliği',
    'saml_sp_acs_url'           => 'Onay Tüketici Hizmeti (OTH) URL\'si',
    'saml_sp_sls_url'           => 'Tek Oturum Kapatma Hizmeti (TOKH) URL\'si',
    'saml_sp_x509cert'          => 'Genel Sertifika',
    'saml_sp_metadata_url'      => 'Meta veri URL\'si',
    'saml_idp_metadata'         => 'SAML IdP Meta Verileri',
    'saml_idp_metadata_help'    => 'Bir URL veya XML dosyası kullanarak IDP meta verilerini belirtebilirsiniz.',
    'saml_attr_mapping_username' => 'Öznitelik Eşleştirme - Kullanıcı adı',
    'saml_attr_mapping_username_help' => 'Öznitelik eşlemesi belirtilmemiş veya geçersizse NameID kullanılacaktır.',
    'saml_forcelogin_label'     => 'SAML Girişe Zorla',
    'saml_forcelogin'           => 'SAML\'yi birincil giriş yapın',
    'saml_forcelogin_help'      => 'Normal giriş sayfasına gitmek için \'/login?nosaml\' kullanabilirsiniz.',
    'saml_slo_label'            => 'SAML Tek Oturum Kapatma',
    'saml_slo'                  => 'Oturumu Kapatırken IdP\'ye bir Oturum Kapatma İsteği Gönderin',
    'saml_slo_help'             => 'Bu, kullanıcının oturum kapatıldığında ilk olarak IdP\'ye yönlendirilmesine neden olur. IdP, SP tarafından başlatılan SAML SLO\'yu doğru şekilde desteklemiyorsa işaretlemeden bırakın.',
    'saml_custom_settings'      => 'SAML Özel Ayarları',
    'saml_custom_settings_help' => 'Onelogin/php-saml kitaplığına ek ayarlar belirleyebilirsiniz. Kendi sorumluluğunuzda kullanın.',
    'saml_download'             => 'Metadata\'yı indir',
    'setting'                   => 'Ayar',
    'settings'                  => 'Ayarlar',
    'show_alerts_in_menu'       => 'Alarmları üst menüde göster',
    'show_archived_in_list'     => 'Arşivlenmiş Varlıklar',
    'show_archived_in_list_text'     => 'Arşivlenmiş varlıkları "Tüm Varlıklar" listesinde göster',
    'show_assigned_assets'      => 'Varlıklara atanan varlıkları göster',
    'show_assigned_assets_help' => 'Kullanıcıyı Görüntüle -> Varlıklar, Kullanıcıyı Görüntüle -> Bilgi -> Tüm Atananları Yazdır ve Hesapta -> Atanan Varlıkları Görüntüle\'de diğer varlıklara atanan varlıkları görüntüleyin.',
    'show_images_in_email'     => 'E-postalarda resimleri göster',
    'show_images_in_email_help'   => 'Snipe-IT kurulumunuz bir VPN\'in ya da kapalı bir ağın arkasındaysa ve ağ dışındaki kullanıcılar bu kurulumda sunulan görüntüleri e-postalarına yükleyemezse bu kutunun işaretini kaldırın.',
    'site_name'                 => 'Site Adı',
    'integrations'               => 'Integrations',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Kaydetmek için test et',
    'webhook_title'               => 'Update Webhook Settings',
    'webhook_help'                => 'Integration settings',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Settings',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-IT version',
    'support_footer'            => 'Destek Bağlantıları Altbilgisi ',
    'support_footer_help'       => 'Snipe-IT destek, bilgi ve Kullanıcı Kılavuzu linklerini kimin göreceğini seçin',
    'version_footer'            => 'Altbilgi içinde Sürüm ',
    'version_footer_help'       => 'Snipe-IT sürümünü kimin göreceğini ve yapı numarasını belirleyin.',
    'system'                    => 'Sistem Bilgisi',
    'update'                    => 'Ayarları Güncelle',
    'value'                     => 'Değer',
    'brand'                     => 'Marka',
    'brand_keywords'            => 'alt bilgi, logo, baskı, tema, cilt, üst bilgi, renkler, renk ve css ayarları',
    'brand_help'                => 'Logo, Site Adı',
    'web_brand'                 => 'Web Markalama Türü',
    'about_settings_title'      => 'Ayarlar Hakkında',
    'about_settings_text'       => 'Bu ayarlar, yüklemenizin belirli yönlerini özelleştirmenizi sağlar.',
    'labels_per_page'           => 'Sayfa Başına Etiketler',
    'label_dimensions'          => 'Etiket boyutları (inç)',
    'next_auto_tag_base'        => 'Sonraki otomatik artış',
    'page_padding'              => 'Sayfa kenar boşlukları (inç)',
    'privacy_policy_link'       => 'Gizlilik Politikası için bağlantı',
    'privacy_policy'            => 'Gizlilik Politikası',
    'privacy_policy_link_help'  => 'Buraya bir URL eklenirse, gizlilik politikanıza bir bağlantı uygulama altbilgisine ve sistemin GDPR\'ye uygun olarak gönderdiği tüm e-postalara dahil edilecektir. ',
    'purge'                     => 'Silinmiş Kayıtları Temizle',
    'purge_deleted'             => 'Kalıcı olarak sil ',
    'labels_display_bgutter'    => 'Etiket alt cilt payı',
    'labels_display_sgutter'    => 'Etiket tarafı oluk',
    'labels_fontsize'           => 'Etiket yazı tipi boyutu',
    'labels_pagewidth'          => 'Etiket sayfası genişliği',
    'labels_pageheight'         => 'Etiket sayfası yüksekliği',
    'label_gutters'        => 'Etiket aralığı (inç)',
    'page_dimensions'        => 'Sayfa boyutu (inç)',
    'label_fields'          => 'Etiket görünür alanları',
    'inches'        => 'inç',
    'width_w'        => 'g',
    'height_h'        => 'y',
    'show_url_in_emails'                => 'E-postalardaki Snipe-IT\'ye bağlantı',
    'show_url_in_emails_help_text'      => 'E-posta altbilgilerinizdeki Snipe-IT kurulumuna geri dönmek istemiyorsanız, bu kutuyu kaldırın. Kullanıcılarınızın çoğu hiç giriş yapmazsa kullanışlıdır.',
    'text_pt'        => 'dpi',
    'thumbnail_max_h'   => 'Maksimum küçük resim yüksekliği',
    'thumbnail_max_h_help'   => 'Listeleme görünümünde minyatür resimleri gösterebilecek maksimum yükseklik piksel. Min 25, maks. 500.',
    'two_factor'        => 'İki Aşamalı Doğrulama',
    'two_factor_secret'        => 'İki Aşamalı Kod',
    'two_factor_enrollment'        => 'İki Aşamalı Kayıt',
    'two_factor_enabled_text'        => 'İki Aşamalı Şifrelemeyi Etkinleştir',
    'two_factor_reset'        => 'Gizli İki Aşamalı Şifrelemeyi Sıfırla',
    'two_factor_reset_help'        => 'Bu işlem, kullanıcıyı cihazlarını Google Authenticator ile tekrar kayıt etmeye zorlar. Bu, kayıtlı cihazlarının kaybolması veya çalınması durumunda yararlı olabilir. ',
    'two_factor_reset_success'          => 'İki aşamalı aygıt başarıyla sıfırlandı',
    'two_factor_reset_error'          => 'İki aşamalı aygıt sıfırlanamadı',
    'two_factor_enabled_warning'        => 'Halihazırda etkinleştirilmemişse iki aşamalı şifreleme etkinleştirilmesi sizi bir Google Auth kayıtlı cihazla yetkilendirmenizi zorlar. Şu an kayıtlı değilseniz, cihazınızı kaydetme olanağına sahip olacaksınız.',
    'two_factor_enabled_help'        => 'Bu Google kimlik doğrulayıcısı kullanma iki aşamalı kimlik doğrulamasına dönecek.',
    'two_factor_optional'        => 'Seçici (Kullanıcılar izin verilirse etkinleştirebilir veya devre dışı bırakabilir)',
    'two_factor_required'        => 'Tüm kullanıcılar için gerekli',
    'two_factor_disabled'        => 'Devredışı',
    'two_factor_enter_code'	=> 'İki Aşamalı Kod Girin',
    'two_factor_config_complete'	=> 'Kodu Gönder',
    'two_factor_enabled_edit_not_allowed' => 'Yöneticiniz bu ayarı düzenlemeniz için izin vermiyor.',
    'two_factor_enrollment_text'	=> "Cihazınız henüz kayıtlı değil ancak iki aşamalı kimlik doğrulama gereklidir. Google kimlik doğrulayıcısı app açmak ve tarama QR kodu cihazınızı kayıt için aşağıdaki. Aygıtınız kayıtlı sonra aşağıdaki kodu girin",
    'require_accept_signature'      => 'İmza Gerekli',
    'require_accept_signature_help_text'      => 'Bu özelliği etkinleştirmek kullanıcıların fiziksel olarak bir varlık kabul evrağı imzalaması gerekir.',
    'left'        => 'sol',
    'right'        => 'sağ',
    'top'        => 'üst',
    'bottom'        => 'alt',
    'vertical'        => 'dikey',
    'horizontal'        => 'yatay',
    'unique_serial'                => 'Eşsiz seri numaraları',
    'unique_serial_help_text'                => 'Bu kutunun işaretlenmesi, varlık serileri üzerinde benzersiz bir kısıtlama uygular',
    'zerofill_count'        => 'Varlık etiketlerinin uzunluğu, boşluksuz olmak üzere',
    'username_format_help'   => 'Bu ayar, yalnızca bir kullanıcı adı sağlanmadıysa ve sizin için bir kullanıcı adı oluşturmamız gerekiyorsa içe aktarma işlemi tarafından kullanılacaktır.',
    'oauth_title' => 'Auth API ayarları',
    'oauth' => 'Auth',
    'oauth_help' => 'Auth Endpoint Ayarları',
    'asset_tag_title' => 'Varlık Etiket Ayarlarını Güncelle',
    'barcode_title' => 'Barkod ayarlarını güncelle',
    'barcodes' => 'Barkod',
    'barcodes_help_overview' => 'Barkod &amp; QR Ayarları',
    'barcodes_help' => 'Bu, önbelleğe alınmış barkodları silmeyi dener. Bu, genellikle yalnızca barkod ayarlarınız değiştiyse veya Snipe-IT URL\'niz değiştiyse kullanılır. Bir sonraki erişimde barkodlar yeniden oluşturulacaktır.',
    'barcodes_spinner' => 'Dosyalar siliniyor...',
    'barcode_delete_cache' => 'Barkod önbelleğini sil',
    'branding_title' => 'Marka Ayarlarını Güncelle',
    'general_title' => 'Genel Ayarları Güncelle',
    'mail_test' => 'Test Gönder',
    'mail_test_help' => ':replyto adresine test maili gönder.',
    'filter_by_keyword' => 'Anahtar kelime ile filtreleyin',
    'security' => 'Güvenlik',
    'security_title' => 'Güvenlik ayarlarını güncelle',
    'security_keywords' => 'parolalar, gereksinimler, iki faktörlü, iki faktörlü, ortak parolalar, uzaktan oturum açma, oturum kapatma ve kimlik doğrulama',
    'security_help' => 'İki adımlı kimlik doğrulama',
    'groups_keywords' => 'izinler, izin grupları, yetkilendirme',
    'groups_help' => 'Hesap izin grupları',
    'localization' => 'Yerelleştirme',
    'localization_title' => 'Yerelleştirme ayarlarını güncelle',
    'localization_keywords' => 'yerelleştirme, para birimi, yerel, yerel ayar, saat dilimi, saat dilimi, uluslararası, uluslararasılaştırma, dil, diller, çeviri',
    'localization_help' => 'Dil, Tarih biçimi',
    'notifications' => 'Bilfirimler',
    'notifications_help' => 'Email Alerts & Audit Settings',
    'asset_tags_help' => 'Artış ve örnekler',
    'labels' => 'Etiket',
    'labels_title' => 'Etiket ayarlarını güncelle',
    'labels_help' => 'Etiket tasarımı &amp;',
    'purge' => 'Temizle',
    'purge_keywords' => 'kalıcı olarak sil',
    'purge_help' => 'Silinen kayıtları temizle',
    'ldap_extension_warning' => 'Bu sunucuda LDAP uzantısı yüklü veya etkin değil gibi görünüyor. Ayarlarınızı yine de kaydedebilirsiniz, ancak LDAP senkronizasyonu veya oturum açma işleminin çalışması için PHP için LDAP uzantısını etkinleştirmeniz gerekir.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Çalışan Sayısı',
    'create_admin_user' => 'Kullanıcı Oluştur::',
    'create_admin_success' => 'Başarılı! Admin kullanıcısı eklendi!',
    'create_admin_redirect' => 'Uygulama girişine gitmek için tıklayın!',
    'setup_migrations' => 'Veritabanı Taşıma::',
    'setup_no_migrations' => 'Taşınacak bir şey yok. Veritabanı tablolarınız zaten kurulu!',
    'setup_successful_migrations' => 'Veritabanı tablolarınız oluşturuldu',
    'setup_migration_output' => 'Dışa aktar:',
    'setup_migration_create_user' => 'Sıradaki: Kullanıcı oluştur',
    'ldap_settings_link' => 'LDAP Ayarları Sayfası',
    'slack_test' => '<i class="fab fa-slack"> entegrasyonunu dene',
];
