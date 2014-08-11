<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-md-12">
                        <h1 class="title">Forum</h1>
                    </div>
                    <div class="col-md-6">
                        <p>Mari belajar bersama DIGIDU dengan melakukan tanya jawab disini.</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb pull-right">
                            <?php if ($type == 'category'): ?>
                            <li>
                                <a href="<?php echo site_url('forum/thread'); ?>">Home</a>
                                <span class="divider">/</span>
                            </li>
                            <?php $cat_total = count($cat); foreach ($cat as $key => $c): ?>
                            <li>        
                                <a href="<?php echo site_url('forum/thread/category/'.$c['slug']); ?>"><?php echo $c['name']; ?></a> 
                                <?php if ($key+1 != $cat_total): ?>
                                <span class="divider">/</span>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <li>
                                <a href="<?php echo site_url('forum/thread'); ?>">Home</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="forum" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    function time_ago($date) {

                        if(empty($date)) {
                            return "No date provided";
                        }

                        $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
                        $lengths = array("60","60","24","7","4.35","12","10");
                        $now = time();
                        $unix_date = strtotime($date);

                        // check validity of date

                        if(empty($unix_date)) {
                            return "Bad date";
                        }

                        // is it future date or past date
                        if($now > $unix_date) {
                            $difference = $now - $unix_date;
                            $tense = "ago";
                        } else {
                            $difference = $unix_date - $now;
                            $tense = "from now";
                        }
                        for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
                            $difference /= $lengths[$j];
                        }
                        $difference = round($difference);
                        if($difference != 1) {
                            $periods[$j].= "s";
                        }

                        return "$difference $periods[$j] {$tense}";
                    }
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="85%">Semua Diskusi</th>
                            <th width="15%">Update Terakhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($threads as $thread): ?>
                        <tr>
                            <td>
                                <a class="a-dark" href="<?php echo site_url('forum/thread/talk/'.$thread->slug); ?>" style="font-size: 20px;"><?php echo $thread->title; ?></a> <br>
                                <a class="label label-info" href="<?php echo site_url('forum/thread/category/'.$thread->category_slug); ?>"><?php echo $thread->category_name; ?></a>
                                
                            </td>
                            <td>
                                <!-- <?php echo date("m/d/y g:i A", strtotime($thread->date_add)); ?> -->
                                <p><?php echo time_ago($thread->date_add); ?></p>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="blog-pagination" style="text-align:center;">
                    <ul class="pagination"><?php echo $page; ?></ul>
                </div>
            </div>
        </div>
    </div>
</section>
