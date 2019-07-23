<?php require 'header.php'; ?>
<!-- ======================================================================
                                        START CONTENT
======================================================================= -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2>contact</h2>
                        <div class="google-map">
                            <<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.9847943107593!2d112.7208920147742!3d-7.127754794852995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd803dd886bbff5%3A0x9777ca139b28195d!2sUniversitas+Trunojoyo+Madura!5e0!3m2!1sid!2sid!4v1538408484557" width="600" height="450" frameborder="0" style="border:0" allowfullscreen" width="600" height="450" frameborder="0" style="border:0"></iframe>
                        </div>

                        <div class="contact-info">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul>
                                        <li><span class="location"><?php echo $contact['alamat']; ?></span></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><span class="mail"><a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></span></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><span class="phone"><?php echo $contact['phone']; ?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="site-title">
                            <div class="site-inside">
                                <span>Write us a letter</span>
                            </div>
                        </div>

                        <div class="the-form">
                            <form id="contact_form">
                                <div class="row">
                                    <div class="col-md-4"><p>Name</p>
                                        <input type="text" name="contact-name" class="the-line">
                                    </div>
                                    <div class="col-md-4"><p>E-mail</p>
                                        <input type="text" name="contact-email" class="the-line">
                                    </div>
                                    <div class="col-md-4"><p>Website</p>
                                        <input type="text" name="contact-website" class="the-line">
                                    </div>
                                </div>
                                <p>Comments</p>
                                <textarea name="contact-message" class="the-area"></textarea>
                                <input type="submit" id="form-send" value="Send" class="button-4">
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="main-sidebar">
                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="widget">
                                        <div class="widget-title">Kategori</div>
                                        <ul class="widget-category">
<?php //kategori produk
$catcat=mysqli_query($con,"SELECT * from rkat_produk order by kat_produk asc limit 7");
while($rcat=mysqli_fetch_array($catcat)) { $rjp=mysqli_num_rows(mysqli_query($con,"SELECT * FROM produk where id_kat_produk='$rcat[id_kat_produk]' and stok>0 ")); ?>
    <li><a href="product?thiscategory=<?php echo base64_encode($rcat['id_kat_produk']); ?>"><?php echo $rcat['kat_produk'].' ('.$rjp.')'; ?></a></li>
    <?php }
?> 
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 col-xs-6">
                                    <div class="widget">
                                        <div class="widget-title">Produk Terbaik Bulain Ini</div>
                                        <ul class="widget-category">
<?php $bul=date('m'); // produk
$propro=mysqli_query($con,"SELECT * from produk where stok>0 and month(tanggal)='$bul' order by stok desc limit 15");
while($rpropro=mysqli_fetch_array($propro)) { ?>
    <li><a href="detailproduct?thisproduct=<?php echo base64_encode($rpropro['id_produk']) ?>&nameproduct=<?php echo $rpropro['nama']; ?>"><?php echo $rpropro['nama']; ?></a></li>
    <?php }
?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-12 col-xs-6">
                                    <div class="widget">
                                        <div class="widget-title">Tags</div>
                                        <div class="tagcloud">
                                            <a href="#">Teh</a>
                                            <a href="#">Kopi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======================================================================
                                        END CONTENT
        ======================================================================= -->
<?php require 'footer.php'; ?>