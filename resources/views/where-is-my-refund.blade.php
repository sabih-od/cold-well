@extends('layouts.main')
@section('content')
    <section class="inerBanner">
        <img src="images/inerbaner1.jpg" class="img-fluid w-100" alt="img">
        <div class="container">
            <h2>Where is My Refund</h2>
        </div>
    </section>

    <section class="refundSec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>where-is-my-refund</h4>
                    <a href="https://sa.www4.irs.gov/irfof/lang/en/irfofgetstatus.jsp" target="_blank">Click this
                        link to track your <strong>Federal</strong> return</a>
                    <h4>Federal Amended Return</h4>
                    <a href="https://www.irs.gov/filing/wheres-my-amended-return" target="_blank">Click this
                        link to track your <strong>Federal</strong> return</a>
                    <h4>State Refund</h4>
                    <p>Select your state and click <strong>Go</strong></p>
                    <form class="gns-form" name="gnsrefund">
                        <select name="states">
                            <option value="">Select State</option>
{{--                            <option value="https://apps.irs.gov/app/tax-withholding-estimator">Tax Withholding--}}
{{--                                Estimator--}}
{{--                            </option>--}}
                            <option value="https://myalabamataxes.alabama.gov/_/#algns">Alabama</option>
                            <option value="#">Alaska(N/A)</option>
                            <option value="https://www.aztaxes.gov/Home/CheckRefund">Arizona</option>
                            <option value="https://atap.arkansas.gov/_/">Arkansas</option>
                            <option value="https://www.ftb.ca.gov/refund/">California</option>
                            <option value="https://www.colorado.gov/revenueonline/_/#cogns">Colorado</option>
                            <option value="https://portal.ct.gov/DRS/myconneCT/myconneCT">Connecticut</option>
                            <option value="https://tax.delaware.gov/rptp/portal/home">Delaware</option>
                            <option value="https://mytax.dc.gov/_/">District Of Columbia</option>
                            <option value="#">Florida(N/A)</option>
                            <option value="https://gtc.dor.ga.gov/_/">Georgia</option>
                            <option value="https://hitax.hawaii.gov/_/">Hawaii</option>
                            <option value="https://idahotap.gentax.com/TAP/_/">Idaho</option>
                            <option value="https://mytax.illinois.gov/_/">Illinois</option>
                            <option value="https://intime.dor.in.gov/eServices/_/">Indiana</option>
                            <option value="https://tax.iowa.gov/wheres-my-refund">Iowa</option>
                            <option value="https://www.kdor.ks.gov/Apps/kcsc/increfundstatus.aspx">Kansas</option>
                            <option value="https://refund.ky.gov">Kentucky</option>
                            <option value="https://latap.revenue.louisiana.gov/_/">Louisiana</option>
                            <option value="https://portal.maine.gov/refundstatus/refund">Maine</option>
                            <option value="https://interactive.marylandtaxes.gov/INDIV/refundstatus/home.aspx">
                                Maryland
                            </option>
                            <option value="https://mtc.dor.state.ma.us/mtc/_/">Massachusetts</option>
                            <option value="https://www.michigan.gov/taxes/iit/refund">Michigan</option>
                            <option value="https://www.mndor.state.mn.us/tp/OnlineServices/_/">Minnesota</option>
                            <option value="https://tap.dor.ms.gov/_/#2">Mississippi</option>
                            <option value="https://dor.mo.gov/taxation/return-status/">Missouri</option>
                            <option value="https://tap.dor.mt.gov/_/#1">Montana</option>
                            <option value="https://ndr-refundstatus.ne.gov/refundstatus/public/search.faces">Nebraska
                            </option>
                            <option value="#">Nevada(N/A)</option>
                            <option value="https://www.olt.com/main/home/nhrefund.asp">New Hampshire</option>
                            <option value="https://www16.state.nj.us/TYTR_TGI_INQ/jsp/prompt.jsp">New Jersey</option>
                            <option value="https://tap.state.nm.us/tap/_/#1">New Mexico</option>
                            <option value="https://www8.tax.ny.gov/PRIS/prisStart">New York</option>
                            <option value="https://eservices.dor.nc.gov/wheresmyrefund/SelectionServlet">North
                                Carolina
                            </option>
                            <option value="https://apps.nd.gov/tax/tap/_/">North Dakota</option>
                            <option value="https://www.tax.state.oh.us/IFILE/WheresMyRefundWeb/wheresmyrefund.jsp">
                                Ohio
                            </option>
                            <option value="https://oktap.tax.ok.gov/oktap/web/_/#okgns">Oklahoma</option>
                            <option value="https://www.doreservices.state.pa.us/Individual/RefundDefault.htm#refund">
                                Pennsylvania
                            </option>
                            <option value="https://www.ri.gov/taxation/refund/">Rhode Island</option>
                            <option value="https://dor.sc.gov/refund">South Carolina</option>
                            <option value="#">South Dakota(N/A)</option>
                            <option value="#">Tennessee(N/A)</option>
                            <option value="#">Texas(N/A)</option>
                            <option value="https://tap.tax.utah.gov/TaxExpress/_/#1">Utah</option>
                            <option value="https://myvtax.vermont.gov/_/">Vermont</option>
                            <option value="https://www.individual.tax.virginia.gov/IOP/#/refund">Virginia</option>
                            <option value="#">Washington(N/A)</option>
                            <option value="https://mytaxes.wvtax.gov/_/#1">West Virginia</option>
                            <option value="https://www.revenue.wi.gov/Pages/Apps/TaxReturnStatus.aspx">Wisconsin
                            </option>
                            <option value="">Wyoming(N/A)</option>

                        </select>
                        <input class="themeBtn" type="button" name="Submit" value="Go"
                               onclick="window.open(gnsrefund.states.options[gnsrefund.states.selectedIndex].value);return false;">
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
