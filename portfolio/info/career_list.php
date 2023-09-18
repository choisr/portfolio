<?php
    $career_arr = array();

    // ======================================= START [아이아이컴바인드]
    $career_arr[] = array(
        'title'     => '픽업서비스'
        , 'd_tit'   => '2022.09 - 2022.10'
        , 'd_txt'   => '온라인 구매 시 배송까지 소요되는 점을 고려해 제품을 바로 받고 싶은 회원 고객을 위해 원하는 제품을 선택한 매장에서 직접 수령할 수 있는 픽업 서비스 제공을 목적으로 개발'
        , 'btn'     => '<a href="'._web_url_.'/career/pickup_service.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'Rest API, Magento(PHP), MySQL, Ajax, JavaScript, JQuery, HTML, CSS'
        , 'desc'    => array(
            '현재 위치 기반으로 가까운 매장 순으로 픽업서비스 신청 가능한 매장 리스트 구현'
            , '회원별 제품 갯수 제한 로직'
            , '픽업서비스 상태별 알림톡 발송 기능'
        )
    );

    $career_arr[] = array(
        'title'     => '메일침프 마케팅 계정 동기화'
        , 'd_tit'   => '2022.09'
        , 'd_txt'   => '이메일 마케팅 서비스 메일침프 이용으로 이커머스 마케팅 동의/거부 시 Sync 맞추기 위함을 목적으로 API 및 Batch 로직 개발'
        , 'btn'     => '<a href="'._web_url_.'/career/api_mailchimp.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'Rest API, Magento(PHP), MySQL, Ajax, JavaScript, JQuery, Linux'
        , 'desc'    => array(
            '이커머스 마케팅 동의/거부 시 메일침프 status 변경을 위한 API 개발'
            , '메일침프 마케팅 계정 리스트 조회 후 이커머스 데이터와 sync 맞추기 위한 batch 작업'
            , '이커머스 회원탈퇴 시 메일침프 리스트도 동일하게 삭제'
        )
    );

    $career_arr[] = array(
        'title'     => '지사별 매장 조회 API'
        , 'd_tit'   => '2022.08'
        , 'd_txt'   => '마젠토 플랫폼으로 구현된 사이트 내 지사별 국가 카테고리 및 매장별 리스트 조회하기 위함으로 API 개발'
        , 'btn'     => '<a href="https://www.gentlemonster.com/kr/store" target="_blank" class="view_btn"><i class="material-icons m-r-0">link</i></a>'
        , 'skill'   => 'Rest API, Magento(PHP), MySQL, Ajax, JavaScript, JQuery, HTML, CSS'
        , 'desc'    => array(
            '현재 지사 사이트 기준으로 국가 카테고리 리스트 구현'
            , '선택 지사 내 도시 및 매장별 리스트 구현'
        )
    );

    $career_arr[] = array(
        'title'     => '브랜드별 OMS 송•수신 API'
        , 'd_tit'   => '2022.05 - 2022.08'
        , 'd_txt'   => '브랜드별 자사몰 관련 주문 건에 대한 입력 및 처리를 위한 주문 관리 시스템(OMS) 도입으로 이커머스 데이터 송수신 API 개발'
        , 'btn'     => '<a href="'._web_url_.'/career/api_oms.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'Rest API, PHP, MySQL, MsSQL'
        , 'desc'    => array(
            '엔드포인트마다 브랜드별로 발생한 주문 건에 대한 status 별 송수신 데이터 처리'
            , '자사몰에서 발생한 주문 건에 대한 status별 조회(송신)'
            , 'OMS에서 발생한 주문 건에 대한 status 변경 처리 및 취소/반품 시 결제 취소 로직 추가(수신)'
        )
    );

    $career_arr[] = array(
        'title'     => '오프라인 매장 QR코드 서비스'
        , 'd_tit'   => '2022.04'
        , 'd_txt'   => '오프라인 매장 내 재고가 없는 제품에 한해 현재 온라인에서 구매 가능한 제품 리스트 노출을 위한 목적으로 별도 페이지 개발'
        , 'btn'     => '<a href="'._web_url_.'/career/offline_qr.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'Rest API, PHP, MySQL, Ajax, JavaScript, JQuery, HTML, CSS'
        , 'desc'    => array(
            '오프라인 매장에서 QR 코드 촬영 시 해당 제품과 동일 모델 라인 관련 페이지로 이동'
            , '알림 받기를 통해 구매 가능한 공식 홈페이지 URL 버튼이 포함된 알림톡 발송 기능'
            , '현재 매장에 DP 되어 있지 않은 제품 전체 리스트 구현'
        )
    );

    $career_arr[] = array(
        'title'     => 'AWS S3 파일 접근 API'
        , 'd_tit'   => '2022.04'
        , 'd_txt'   => 'AWS S3에 이커머스 쇼핑몰에 노출되는 제품 이미지나 저장하고 있는 파일을 쉽게 관리하기 위한 목적으로 파일 업로드 및 삭제 API 구현'
        , 'btn'     => '<a href="'._web_url_.'/career/api_oms.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'Rest API, PHP, MySQL, MsSQL'
        , 'desc'    => array(
            'AWS S3 region,bucket 별로 지정하여 업로드 및 삭제 가능'
            , '업로드 시 실제 저장되는 파일명이 포함된 경로 URL 리턴'
            , '삭제 시 성공여부 json 데이터 아웃풋'
        )
    );

    $career_arr[] = array(
        'title'     => '정품카드 관리 API'
        , 'd_tit'   => '2022.01 - 2022.03'
        , 'd_txt'   => '이커머스 온라인/오프라인별(POS) 구매 건에 대한 정품 보증 및 제품 서비스를 위한 목적으로 제품 정품카드 조회 API 개발'
        , 'btn'     => '<a href="'._web_url_.'/career/api_serial.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'Rest API, Magento(PHP), MySQL, MsSQL'
        , 'desc'    => array(
            '이커머스 온라인/오프라인별(POS) SALES, 정품카드 매핑 로직 구현 및 로그 추가'
            , '주문 건에 대한 취소/반품 시 status 별도 플래그 처리'
            , '정품 조회 이력 로그 추가'
        )
    );

    $career_arr[] = array(
        'title'     => '알림톡, SMS 발송 API'
        , 'd_tit'   => '2021.11 - 2021.12'
        , 'd_txt'   => '기존 Popbill Rest API 만으로는 알림톡 및 SMS 발송하기에는 간단하게 구현되어 있지 않아 좀 더 쉽고 효율적으로 사용하기 위한 목적으로 알림톡, SMS 발송 API 구현'
        , 'btn'     => '<a href="'._web_url_.'/career/api_popbill.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'Rest API, PHP, MySQL'
        , 'desc'    => array(
            'Popbill Rest API 활용'
            , '템플릿별 알림톡 및 SMS 발송'
            , '발송 로그 별도 DB 관리'
        )
    );

    $career_arr[] = array(
        'title'     => '결제모듈 구현'
        , 'd_tit'   => '2021.09 - 2021.11'
        , 'd_txt'   => '이커머스 쇼핑몰 내 다양한 결제 방식 추가를 위한 목적으로 각 페이별 제공하는 API를 이용한 결제 완료/취소 로직 추가 작업'
        , 'btn'     => '<a href="'._web_url_.'/career/add_payment.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'Rest API, PHP, MySQL, Ajax, JavaScript, JQuery, Linux'
        , 'desc'    => array(
            'KCP(신용카드, 가상계좌, 계좌이체)'
            , 'KAKAOPAY, NAVERPAY'
            , '포인트 사용 시 현금영수증 발급/취소 처리를 위한 별도 로직 추가'
        )
    );

    $career_arr[] = array(
        'title'     => '이커머스 데이터 조회 API'
        , 'd_tit'   => '2021.07 - 2021.08'
        , 'd_txt'   => '지사별 이커머스 회원/주문/재고에 대한 요청 조건에 맞는 리스트 조회를 목적으로 API 개발'
        , 'btn'     => '<a href="'._web_url_.'/career/api_ecommerce.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'PHP, MsSQL, MySQL, Ajax, JavaScript, JQuery, Linux'
        , 'desc'    => array(
            '회원/주문 생성/삭제 특정 액션 발생할 때마다 해당 건에 대한 지사별 엔드포인트로 API 전송'
            , '요청 조건에 따른 회원/주문 리스트 조회 API 개발'
            , '지사별 제품 재고 리스트 조회 API 개발'
        )
    );

    // ======================================= START [미래아이엔씨]
    $career_arr[] = array(
        'title'     => 'S SEARCH (쇼핑검색)'
        , 'd_tit'   => '2021.03 - 2021.04'
        , 'd_txt'   => '네이버 데이터랩 API, Search Ad API를 이용하여 특정 업체와 키워드에 대한 네이버 쇼핑검색 관련 데이터 확인 목적으로 개발'
        , 'btn'     => '<a href="'._web_url_.'/career/s_search.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'Rest API, PHP, MySQL, Ajax, JavaScript, JQuery, Linux'
        , 'desc'    => array(
            '쇼핑검색, 키워드분석, 연관키워드, 관심상품 조회'
            , '관심상품 등록 시 일별 데이터 수집(batch 설정) 및 순위, 가격에 대한 변동데이터 그래프 구현'
            , '전체 페이지 PDF 다운 기능'
        )
    );

    $career_arr[] = array(
        'title'     => '뉴스레터'
        , 'd_tit'   => '2020.12'
        , 'd_txt'   => '매월 자사 관련 뉴스레터 발송하기 위한 목적으로 템플릿 등록 및 관리, 발송 기능 구현'
        , 'btn'     => '<a href="'._web_url_.'/career/newsletter.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'PHP, MySQL, Ajax, JavaScript, JQuery, HTML, CSS'
        , 'desc'    => array(
            '템플릿 등록 시 뉴스레터 카테고리 리스트 추가, 삭제, 직접입력 기능 구현'
            , '템플릿 관리(수정,삭제) 및 개별,일괄발송/재발송 가능'
            , '발송리스트 구현(조회수, 메일수신시간 조회 가능)'
        )
    );

    $career_arr[] = array(
        'title'     => '코마케팅 (디자인 포트폴리오)'
        , 'd_tit'   => '2020.09 - 2020.10'
        , 'd_txt'   => '자사 디자인 작업물(이미지/동영상제작) 카테고리별 이미지 구분 및 포트폴리오 목적으로 개발'
        , 'btn'     => '<a href="https://comarketing.co.kr/images_making/images01.php" target="_blank" class="view_btn"><i class="material-icons m-r-0">link</i></a>'
        , 'skill'   => 'Rest API, PHP, MySQL, JavaScript, JQuery'
        , 'desc'    => array(
            '자사 그룹웨어 디자인 업무요청 완료 시 첨부된 이미지파일 자동 업로드 기능 (batch 설정)'
            , '유튜브 API를 통해 자사 유튜브 업로드 영상 리스트 업데이트 기능 (batch 설정)'
            , '관리자페이지 별도 구현(수동업로드, 이미지관리)'
        )
    );

    $career_arr[] = array(
        'title'     => '네이버 통합관리'
        , 'd_tit'   => '2020.08 - 2020.09'
        , 'd_txt'   => '담당자별 검색광고 설정값을 편리하게 관리하기 위해 네이버 Search Ad API를 이용해 자사 그룹웨어 내 네이버 검색광고 시스템과 동일한 기능 구현'
        , 'btn'     => '<a href="'._web_url_.'/career/nv_management.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'Rest API, PHP, MySQL, Ajax, JavaScript, JQuery, Linux'
        , 'desc'    => array(
            '검색광고별 캠페인/광고그룹/키워드 관리'
            , '키워드 즐겨찾기 기능 추가 구현으로 인한 일괄관리 가능'
            , '등록키워드에 한해 품질지수 누적 데이터 수집 로직 개발 및 조회 리스트 구현 (일별 수집, batch 설정)'
        )
    );

    $career_arr[] = array(
        'title'     => '미래톡 (상담 관리 솔루션)'
        , 'd_tit'   => '2020.04 - 2020.07'
        , 'd_txt'   => '미래톡(자사 상담 솔루션), 네이버톡톡, 카카오 플러스채널을 하나로 연동시킨 통합 관리 메신저 서비스로 광고주 사이트 내 상담 관리 솔루션 제공 목적으로 개발'
        , 'btn'     => '<a href="https://www.miraetalk.com/home" class="view_btn" target="_blank" ><i class="material-icons m-r-0">link</i></a>'
        , 'skill'   => 'Node.js, Pure JavaScript, JQuery'
        , 'desc'    => array(
            '광고주 사이트에서 이용자가 문의내용과 휴대폰번호만으로 광고주에게 실시간 SMS 문의 접수 가능'
            , '문의 접수 시 광고주에게 카카오톡/문자 알림 발송 기능'
            , '관리자페이지 별도 구현(알림, 아이콘 노출 관련 설정 등)'
        )
    );

    $career_arr[] = array(
        'title'     => '이메일제안서 툴 개발'
        , 'd_tit'   => '2020.02 - 2020.03'
        , 'd_txt'   => '사용자별 원하는 메일 템플릿 선택 및 보내고자 하는 내용 작성, 이미지, 첨부파일을 추가하면 템플릿 틀에 맞춰 이메일 발송이 가능하도록 기능 구현'
        , 'btn'     => '<a href="'._web_url_.'/career/proposal.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'PHP, MySQL, JavaScript, JQuery, HTML, CSS'
        , 'desc'    => array(
            '메일 템플릿 내 네이버 스마트에디터을 이용한 내용 작성 기능 구현'
            , '미리보기/임시저장/불러오기 기능'
            , '다중 이메일 발송 기능 구현(직접입력/엑셀업로드)'
        )
    );

    $career_arr[] = array(
        'title'     => '통합견적서 툴 개발'
        , 'd_tit'   => '2020.01'
        , 'd_txt'   => '매체별 광고 예상 견적에 대해 사용자가 원하는 매체 선택,추가하여 견적서를 작성히면 자사 견적서 틀에 맞춰 이메일 발송이 가능하도록 기능 구현'
        , 'btn'     => '<a href="'._web_url_.'/career/estimate.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'Rest API, PHP, MySQL, JavaScript, JQuery'
        , 'desc'    => array(
            '견적서 모바일용 카카오링크 생성/복사하기 기능 구현'
            , '네이버 (API 이용 자동 추가 가능), 카카오/구글 (엑셀 업로드 기능으로 자동 추가), 타 매체 (직접입력) 기능 구현'
            , '다중 이메일 발송 기능 구현'
        )
    );

    $career_arr[] = array(
        'title'     => '네이버 데이터랩'
        , 'd_tit'   => '2019.10'
        , 'd_txt'   => '자사 사이트 내 네이버 데이터랩과 동일한 기능 구현 목적으로 Open API를 이용해 통합 검색 트렌드 및 쇼핑 카테고리별 검색 트렌드 데이터 그래프화 작업'
        , 'btn'     => '<a href="'._web_url_.'/career/datalab.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>
                        <a href="http://toup.net/miraeSolution/datalab.php" target="_blank" class="view_btn2"><i class="material-icons m-r-0">link</i></a>'
        , 'skill'   => 'Rest API, PHP, MySQL, JavaScript, JQuery'
        , 'desc'    => array(
            '네이버 데이터랩 - 검색어트렌드, 쇼핑인사이트(분야/검색어 통계, 쇼핑분야 트렌드 비교) 기능 구현'
            , '데이터 그래프 구현 시 amcharts 라이브러리 사용'
            , '기간별/성별/기기별/연령별 조회 가능'
        )
    );

    $career_arr[] = array(
        'title'     => '카카오모먼트 API'
        , 'd_tit'   => '2019.08'
        , 'd_txt'   => '광고계정별 누적 매출 데이터 확인 목적으로 카카오모먼트 API를 이용한 매출 관련 데이터 수집 로직 개발'
        , 'btn'     => ''
        , 'skill'   => 'Rest API, PHP, MySQL, Linux'
        , 'desc'    => array(
            '광고계정별 데이터 수집 로직 개발 (일별수집, batch 설정)'
            , '월기준 광고계정 담당 본부별, 팀별, 계정별 리스트 구현'
            , '엑셀 다운로드 기능'
        )
    );

    $career_arr[] = array(
        'title'     => '사내 교육동영상'
        , 'd_tit'   => '2019.07'
        , 'd_txt'   => '영업담당자 교육을 위한 동영상 업로드/조회 목적으로 사내 그룹웨어 내 교육동영상 별도 페이지 개발'
        , 'btn'     => '<a href="'._web_url_.'/career/edu.php" class="view_btn"><i class="material-icons m-r-0">description</i></a>'
        , 'skill'   => 'PHP, MySQL, JavaScript, JQuery, HTML, CSS'
        , 'desc'    => array(
            '카테고리별 영상 구분 및 즐겨찾기,다운로드 기능 제공'
            , '영상별 조회수 기능 제공 (체류시간 분단위 체크)'
            , '별도 관리자페이지 내 카테고리, 영상 업로드/수정/삭제 관리'
        )
    );

    $career_arr[] = array(
        'title'     => '크리테오 대행 3대몰 상품수집'
        , 'd_tit'   => '2019.02 - 2019.05'
        , 'd_txt'   => '크리테오 매체 대행 설치 및 상품관련 데이터 수집을 위해 3대몰(카페24, 메이크샵, 고도몰)의 Open API를 이용한 상품수집 로직 개발'
        , 'btn'     => ''
        , 'skill'   => 'Rest API, PHP, MySQL, Linux'
        , 'desc'    => array(
            '호스팅별 Open API를 이용해 상품 관련 데이터(상품/주문리스트, 카테고리, 브랜드) 업데이트 (batch 설정)'
            , '상품피드 수집 상태 및 개수 확인 가능'
            , '2시간마다 업체별 상품수집 (batch 설정)'
        )
    );

?>