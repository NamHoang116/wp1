<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress-demo' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'root' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5W2A=A:lth^~_%Ppik5t3k}6SV_$IcN}bi],k@i*~lu8lYTSu>33U?#bkB47#wPM' );
define( 'SECURE_AUTH_KEY',  'b=-]YSATrLOn0V9}9Kg5?{.X13vU6POi_yaHJjhn6?nl8r`6D1):*r]dxvBN/&oo' );
define( 'LOGGED_IN_KEY',    ']{PDCP zu-hxR|N5=jw%^hq!Da@p$Kg-%fM7m{G1O_b9n)5%:*;;}3R!^?!Sy!)w' );
define( 'NONCE_KEY',        'KcnL<xl*1%4HDQS*$shUiG}ytG55V/KGNXG6]&KDW#R3`}L46zgUq$$_nI$(vg?>' );
define( 'AUTH_SALT',        'f;E1]Z`qJ5<&}xxc@G:wWEW0mRt/c1ZSf>I (z2&88Gq4IwNsR8t J({iUIwZB_i' );
define( 'SECURE_AUTH_SALT', '*py#n%6nW`L2Z@]!^JFLh1TO.ss>1Y18_(gP)^8Ae*Q]KPau?8,w5oWVhOwQ*{M%' );
define( 'LOGGED_IN_SALT',   'mKN3[h09oq_{CtcldYms+(Rr5aZ$= 8Q.w4k_L)mlHh60zdN^Hj:_jX&*]LFPKQH' );
define( 'NONCE_SALT',       'Y}<d*XuCY3L@3yHRwV+6WB{PJ:*A`IyFN^;Yy!db!rHBIm7I$JkI3RJdKQ@epmv|' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
