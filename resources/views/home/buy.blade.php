

@extends("home.head")
@section("content")
<br/><br/><br/><br/><br/><br/><br/><br/>
<script type="text/javascript" async="" src="{{ URL::asset('js/confirm-8860974469.js') }}"></script>
<div class="g-bd f-margin-top-50">
    <div class="g-row">
        <div class="g-panel">
            <div class="w-panel">
                <div class="hd">
                    收货信息
                </div>
                <div class="bd">
                    <div id="j-orderAddress" class="m-orderAddress"><button id="j-addOrderAddress" class="addOrderAddress w-button w-button-l" type="button">新建地址</button></div>
                </div>
            </div>
        </div>
        <div class="g-itemInfo">
            <div class="m-table">
                <div class="headBg"></div>
                <table class="m-orderTable">
                    <thead class="thead">
                        <tr class="tr">
                            <td class="th col1">商品信息</td>
                            <td class="th col2"></td>
                            <td class="th col3">单价</td>
                            <td class="th col4">数量</td>
                            <td class="th col5">小计</td>
                            <td class="th col6">实付</td>
                        </tr>
                    </thead>

                    @foreach($buy as $shopp)
                    <tbody class="tbody" id="j-items">
                        <tr class="tr">
                            <td class="td col1">
                                <img class="img" src=".././images/child/{{ $shopp->photo }}">
                            </td>
                            <td class="td col2">
                                <p class="line">{{ $shopp->name }}</p>
                                <p class="line line-1">
                                    <span>{{ $shopp->briefing }}</span>
                                </p>
                            </td>
                            <td class="td col3">
                                <p>{{ $shopp->price }}</p>
                            </td>
                            <td class="td col4">{{ $num }}</td>
                            <td class="td col5">{{ $shopp->price * $num  }}</td>
                            <td class="td col6">{{ $shopp->price * $num  }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="m-itemInfoFt" id="j-itemInfoFt">
                <div class="left">
                    <div class="tt">使用优惠券<span class="text">(0张)</span>
                        <a href="http://you.163.com/help#rule">
                            <i class="w-icon-normal icon-normal-ask">
                            </i>
                        </a>
                    </div>
                    <div class="ft">
                        <a id="j-showActivateCoupon" href="javascript:void(0);" class="tt">兑换优惠券
                            <i class="w-icon-normal icon-normal-down-confirm">
                            </i>
                        </a>
                        <form class="m-activateCouponIpt j-activateCouponIpt f-dn">
                            <div class="hd">
                                <input id="j-activateCouponIpt" class="ipt" placeholder="请输入优惠码" type="text">
                                <input id="j-activateCouponBtn" class="btn" value="兑换" type="submit">
                            </div>
                            <div class="ft">
                                <div id="j-activateCouponTip" class="w-tipMsg w-tipMsg-success msg" style="display: none;">
                                    <i class="icon">
                                    </i>
                                    <span class="text">
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="splitLine">
                    </div>
                    <div class="tt">使用礼品卡
                        <a href="http://you.163.com/help#giftCard">
                            <i class="w-icon-normal icon-normal-ask">
                            </i>
                        </a>
                    </div>
                    <div class="hd">
                        <div class="w-chkbox">
                            <input name="useGiftCard" class="j-userGiftCard" disabled="true/" type="checkbox">
                            <span class="f-fz14 f-txt-assist">可用余额
                                <span class=" f-txt-assist"> ¥0</span>
                            </span>
                        </div>
                        <div class="w-payPwd j-payPwdIptWrap" style="display:none;">
                            <input name="paypwd" style="display:none;" type="password">
                            <input id="j-payPwdIpt" name="paypwd" placeholder="请输入支付密码" class="ipt" maxlength="6/" type="password">
                            <a href="http://you.163.com/user/securityCenter/resetPayPwd" target="_blank" class="w-link link">忘记密码?</a>
                            <div id="j-payPwdTip" class="w-tipMsg w-tipMsg-success msg" style="display: none;">
                                <i class="icon"></i>
                                <span class="text"></span>
                            </div>
                        </div>
                    </div>
                    <div class="ft">
                        <a id="j-showGiftCard" href="javascript:void(0);" class="tt">添加礼品卡
                            <i class="w-icon-normal icon-normal-down-confirm">
                            </i>
                        </a>
                        <form class="m-giftCardIpt j-showGiftCardIpt f-dn">
                            <div class="hd">
                                <input id="j-giftCardIpt" class="ipt" placeholder="请输入礼品卡密码" type="text">
                                <input id="j-giftCardBtn" class="btn" value="绑定" type="submit">
                            </div>
                            <div class="ft">
                                <div id="j-giftCardTip" class="w-tipMsg w-tipMsg-success msg" style="display: none;">
                                    <i class="icon">
                                    </i>
                                    <span class="text">
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <p class="line1">
                        <label>商品合计<span>:</span></label>
                        <span class="amount">¥49.90</span></p>
                    <p class="line2"><label>优惠券<span>:</span></label>
                        <span class="amount">¥0.00</span>
                    </p>
                    <div class="line3">
                        <div class="right">
                            <label>运费<span>:</span></label>
                            <span class="amount">¥10.00</span></div>
                        <div class="m-tipTag tip">
                            <div class="inner">再购买39元免邮</div></div></div>
                    <p class="line4"><label class="label">实付<span>:</span></label>
                        <span class="price">¥59.90</span></p>
                    <div class="line5">
                        <input id="j-orderConfirmSubmit" class="w-button w-button-primary w-button-xl submit" value="去付款" type="submit">
                        <div class="notice">
                            <a class="f-hide" href="http://you.163.com/help#notice" target="_blank">春节期间发货公告</a>
                        </div>
                    </div>
                    <div class="line6" id="j-userinfo-ft">
                    </div>
                </div>
            </div>
            <div class="m-agreement">
                <a class="w-link agreement" href="http://you.163.com/help#agreement">同意《严选平台服务协议》</a>
                <div class="w-chkbox checkbox">
                    <input id="j-agreeCheckbox" checked="checked" type="checkbox">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
