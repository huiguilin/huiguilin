<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

    private $coupon = array();
    private $card = array();
    private $partner = array();
    private $evaluation = array();
    private $news = array();
    private $recommend = array();
    private $ads = array();

    public function index(){
        $helper = new CmsIndexModel();
        $cmsData = $helper->readCmsIndex();
        $this->releaseData($cmsData);
        $coupon = $this->getCoupon($this->coupon);
        $card = $this->getCard($this->card);
        $news = $this->getNews($this->news);
        $ads = $this->getAds($this->ads);
        $partner = $this->getPartner($this->partner);
        $recommend = $this->getPartner($this->recommend);
        $evaluation = $this->getEvaluation($this->evaluation);
        $this->assign("coupons", $coupon);
        $this->assign("cards", $card);
        $this->assign("news", $news);
        $this->assign("ads", $ads);
        $this->assign("partners", $partner);
        $this->assign("hot_partners", $partner);
        $this->assign("recommends", $recommend);
        $this->assign("evaluations", $evaluation);

        $this->display();
    }

    private function getCoupon($coupon) {
        if (empty($coupon)) {
            return array();
        }
        $ids = DataToArray($coupon, 'id');
        $helper = new CouponModel();
        $info = $helper->getCouponByCouponId($ids);
        $result = $this->mergeData($coupon, $info, 'coupon_id');
        return $result;
    }

    private function getCard($card) {
        if (empty($card)) {
            return array();
        }
        $ids = DataToArray($card, 'id');
        $helper = new CouponModel();
        $info = $helper->getCouponByCouponId($ids);
        $result = $this->mergeData($card, $info, 'card_id');
        return $result;
    }

    private function getNews($news) {
        if (empty($news)) {
            return array();
        }
        $ids = DataToArray($news, 'id');
        $newsHelper = new NewsModel();
        $info = $newsHelper->getNewsByNewsId($ids);
        $result = $this->mergeData($news, $info, 'news_id');
        return $result;
    }

    private function getAds($ads) {
        if (empty($ads)) {
            return array();
        }
        $ids = DataToArray($ads, 'id');
        $adHelper = new AdModel();
        $info = $adHelper->getAdByAdId($ids);
        $result = $this->mergeData($ads, $info, 'id');
        return $result;
    }

    private function getPartner($partners) {
        if (empty($partners)) {
            return array();
        }
        $ids = DataToArray($partners, 'id');
        $helper = new PartnerModel();
        $info = $helper->getPartnerByPartnerId($ids);
        $helper = new PartnerPictureModel();
        $picture = $helper->getPartnerPictureByPartnerId($ids); 
        $result = $this->mergeData($partners, $info, 'partner_id');
        $result = $this->mergeData($result, $picture, 'partner_id');
        return $result;
    }

    private function getEvaluation($evaluations) {
        $helper = new EvaluationModel();
        $info = $helper->getEvaluation();
        $userId = DataToArray($info, 'user_id');
        $userHelper = new UserProfileModel();
        $userInfo = $userHelper->getUserProfileByUserId($userId);
        $result = $this->mergeData($info, $userInfo, 'user_id', 'user_id');
        $partnerIds = DataToArray($info, 'id');
        $partnerHelper = new PartnerModel();
        $partnerInfo = $partnerHelper->getPartnerByPartnerId($partnerIds);
        $result = $this->mergeData($result, $partnerInfo, 'partner_id', 'id');
        return $result;
    }
    
    private function mergeData($cmsInfo, $info, $key, $cmsKey = 'id') {
        $info = ArrayKeys($info, $key);
        $result = array();
        foreach ($cmsInfo AS $key => $value) {
            $id = $cmsInfo[$key][$cmsKey];
            if (!empty($info[$id])) {
                $cmsInfo[$key] = array_merge($cmsInfo[$key], $info[$id]);
            }
            $result[$key] = $cmsInfo[$key];
        }
        return $result;
    }

    private function releaseData($cmsData) {
        foreach ($cmsData AS $k => $v) {
            switch ($cmsData[$k]['module_type']) {
                case '1':
                    $this->coupon[] = $cmsData[$k];
                    break;
                
                case '2':
                    $this->card[] = $cmsData[$k];
                    break;

                case '3':
                    $this->partner[] = $cmsData[$k];
                    break;

                case '4':
                    $this->evaluation[] = $cmsData[$k];
                    break;

                case '5':
                    $this->news[] = $cmsData[$k];
                    break;
                
                case '6':
                    $this->ads[] = $cmsData[$k];
                    break;

                case '7' :
                    $this->recommend[] = $cmsData[$k];
                    break;

            }
        }
        return TRUE;
    }

}
