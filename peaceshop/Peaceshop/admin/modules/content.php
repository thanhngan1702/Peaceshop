<div id="content">
    <div class="container-fluid">
        <?php
        if (isset($_GET['quanly']) && isset($_GET['ac'])) {
            $get1 = $_GET['quanly'];
            $get2 = $_GET['ac'];
        } else {
            $get1 = '';
            $get2 = '';
        }
        if (($get1 == 'loaisp') && ($get2 == 'them')) {
            require ('modules/quanlyloaisp/them.php');
        } else if (($get1 == 'loaisp') && ($get2 == 'lietke')) {
            require 'modules/quanlyloaisp/spLietke.php';
            $loai = new spLietke();
            require('modules/quanlyloaisp/lietke.php');
        } else if (($get1 == 'loaisp') && ($get2 == 'sua')) {
            require 'modules/quanlyloaisp/spSua.php';
            $loai = new spSua();
            require('modules/quanlyloaisp/sua.php');
        }
        
        
        else if (($get1 == 'loaihoa') && ($get2 == 'them')) {
            require('modules/quanlyloaihoa/them.php');
        } else if (($get1 == 'loaihoa') && ($get2 == 'lietke')) {
            require 'modules/quanlyloaihoa/spLietke.php';
            $loaihoa = new spLietke();
            require('modules/quanlyloaihoa/lietke.php');
        } else if (($get1 == 'loaihoa') && ($get2 == 'sua')) {
            require 'modules/quanlyloaihoa/spSua.php';
            $loaihoa = new spSua();
            require('modules/quanlyloaihoa/sua.php');
        }
        
        else if (($get1 == 'chude') && ($get2 == 'them')) {
            require('modules/quanlychude/them.php');
        } else if (($get1 == 'chude') && ($get2 == 'lietke')) {
            require 'modules/quanlychude/spLietke.php';
            $chude = new spLietke();
            require('modules/quanlychude/lietke.php');
        } else if (($get1 == 'chude') && ($get2 == 'sua')) {
            require 'modules/quanlychude/spSua.php';
            $chude = new spSua();
            require('modules/quanlychude/sua.php');
        }

        else if (($get1 == 'khuyenmai') && ($get2 == 'them')) {
            require('modules/quanlykhuyenmai/them.php');
        } else if (($get1 == 'khuyenmai') && ($get2 == 'lietke')) {
            require 'modules/quanlykhuyenmai/spLietke.php';
            $khuyenmai = new spLietke();
            require('modules/quanlykhuyenmai/lietke.php');
        } else if (($get1 == 'khuyenmai') && ($get2 == 'sua')) {
            require 'modules/quanlykhuyenmai/spSua.php';
            $khuyenmai = new spSua();
            require('modules/quanlykhuyenmai/sua.php');
        }else if (($get1 == 'khuyenmai') && ($get2 == 'xem')) {
            require 'modules/quanlykhuyenmai/spLietke.php';
            $khuyenmai = new spLietke();
            require('modules/quanlykhuyenmai/xem.php');
        }


        else if (($get1 == 'banner') && ($get2 == 'them')) {
            require('modules/quanlybanner/them.php');
        } else if (($get1 == 'banner') && ($get2 == 'lietke')) {
            require 'modules/quanlybanner/spLietke.php';
            $banner = new spLietke();
            require('modules/quanlybanner/lietke.php');
        } else if (($get1 == 'banner') && ($get2 == 'sua')) {
            require 'modules/quanlybanner/spSua.php';
            $banner = new spSua();
            require('modules/quanlybanner/sua.php');
        }

        else if (($get1 == 'lienhe') && ($get2 == 'lietke')) {
            require 'modules/quanlylienhe/spLietke.php';
            $lienhe = new spLietke();
            require('modules/quanlylienhe/lietke.php');
        } else if (($get1 == 'lienhe') && ($get2 == 'xem')) {
            require 'modules/quanlylienhe/spLietke.php';
            $lienhe= new spLietke();
            require('modules/quanlylienhe/xem.php');
        }
        
        else if (($get1 == 'sanpham') && ($get2 == 'them')) {
            include 'modules/quanlysanpham/spThem.php';
            $sp = new spThem();
            require('modules/quanlysanpham/them.php');
        } else if (($get1 == 'sanpham') && ($get2 == 'lietke')) {
            require 'modules/quanlysanpham/spLietke.php';
            $sp = new spLietke();
            require('modules/quanlysanpham/lietke.php');
        } else if (($get1 == 'sanpham') && ($get2 == 'sua')) {
            require 'modules/quanlysanpham/spSua.php';
            $sp = new spSua();
            require('modules/quanlysanpham/sua.php');
        } 

        else if (($get1 == 'donhang') && ($get2 == 'lietke')) {
            require 'modules/quanlydonhang/spLietke.php';
            $dh = new spLietke();
            require('modules/quanlydonhang/lietke.php');
        }else if (($get1 == 'donhang') && ($get2 == 'xemchitiet')) {
            require('modules/quanlydonhang/spLietke.php');
            $dh = new spChitietLietke();
            require('modules/quanlydonhang/xemchitiet.php');
        }
        
        else if (($get1 == 'tintuc') && ($get2 == 'them')) {
            require('modules/quanlytintuc/them.php');
        } else if (($get1 == 'tintuc') && ($get2 == 'lietke')) {
            require 'modules/quanlytintuc/spLietke.php';
            $tt = new spLietke();
            require('modules/quanlytintuc/lietke.php');
        } else if (($get1 == 'tintuc') && ($get2 == 'sua')) {
            require 'modules/quanlytintuc/spSua.php';
            $tt = new spSua();
            require('modules/quanlytintuc/sua.php');
        }


        else if (($get1 == 'cnxh') && ($get2 == 'them')) {
            require('modules/quanlycnxh/them.php');
        } else if (($get1 == 'cnxh') && ($get2 == 'lietke')) {
            require 'modules/quanlycnxh/spLietke.php';
            $cnxh = new splietke();
            require('modules/quanlycnxh/lietke.php');
        } else if (($get1 == 'cnxh') && ($get2 == 'sua')) {
            require 'modules/quanlycnxh/spSua.php';
            $cnxh = new spSua();
            require('modules/quanlycnxh/sua.php');
        }
        
        else if (($get1 == 'gallery') && ($get2 == 'them')) {
            require 'modules/gallery/spThem.php';
            $gallery = new spThem();
            require('modules/gallery/them.php');
        } else if (($get1 == 'gallery') && ($get2 == 'lietke')) {
            require 'modules/gallery/spLietKe.php';
            $gallery = new spLietke();
            require('modules/gallery/lietke.php');
        } else if (($get1 == 'gallery') && ($get2 == 'sua')) {
            require 'modules/gallery/spSua.php';
            $gallery = new spSua();
            require('modules/gallery/sua.php');
        } 
        
        else if (($get1 == 'taikhoan') && ($get2 == 'them')) {
            require('modules/quanlytaikhoan/them.php');
        } else if (($get1 == 'taikhoan') && ($get2 == 'lietke')) {
            require 'modules/quanlytaikhoan/spLietke.php';
            $lk = new spLietke();
            require('modules/quanlytaikhoan/lietke.php');
        } else if (($get1 == 'taikhoan') && ($get2 == 'sua')) {
            require 'modules/quanlytaikhoan/spSua.php';
            $tk = new spSua();
            require('modules/quanlytaikhoan/sua.php');
        }else if (($get1 == 'taikhoan') && ($get2 == 'xemchitiet')) {
            require('modules/quanlytaikhoan/spLietke.php');
            $lk = new spChitietLietke();
            require('modules/quanlytaikhoan/xemchitiet.php');
        }
        
        else if (($get1 == 'admin') && ($get2 == 'xuly')) {
            require 'modules/admin/spXuly.php';
            $xuly = new spXuly();
            require('modules/admin/xuly.php');
        }else if (($get1 == 'admin') && ($get2 == 'xulyadmin')) {
            require 'modules/admin/spXuly.php';
            $xuly = new spXuly();
            require('modules/admin/xulyadmin.php');
        }else if (($get1 == 'admin') && ($get2 == 'lietke')) {
            require('modules/admin/lietke.php');
        }
        
        else {
            require 'modules/dashboard/spDashboard.php';
            $sp = new spDashboard();
            require ('modules/dashboard/dashboard.php');
        }
        ?>
    </div>
</div>