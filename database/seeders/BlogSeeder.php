<?php

namespace Database\Seeders;

use App\Models\Admin\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            //website category
            ['blog_title' => 'What happens to your real estate taxes and home owners insurance when you pay off your mortgage?',
                'blog_description' => '<h2>Should I Use an Escrow Service?</h2>
                            <p><strong>You paid off your
                                    mortgage.<em>&nbsp; </em></strong><strong><em>Congratulations!</em></strong><strong><em>&nbsp; </em></strong>
                            </p>
                            <p>You now experience the security, financial freedom, and peace of mind you can only feel
                                by being mortgage free.</p>
                            <p>Knowing you are insulated from losing your home in financial difficulties.&nbsp; Saving
                                thousands of dollars in interest charges that is money that can be used for other
                                investments. You have freed up cash for travel, retirement, and other long-term
                                plans.</p>
                            <p><strong>But now your lender no longer offers <em>escrow services</em> for paying property
                                    taxes and homeowners insurance.</strong></p>
                            <p>After you payoff your mortgage, you realize <u>you</u> are now responsible for saving
                                money for paying your two biggest bills of the year.&nbsp; Your <u>property taxes</u>
                                and <u>homeowners’ insurance</u>.</p>
                            <p><strong>What happens if you forget to pay your property taxes or homeowner insurance on
                                    time?</strong></p>
                            <p>If your homeowner’s insurance lapses, your house could burn down, leaving you with a
                                total loss of your hard-earned investment.&nbsp; Likewise, if you don’t pay your taxes,
                                the local taxing authority could put a lien on your home and collect taxes due at a
                                forced foreclosure or tax sale.</p>
                            <p><strong>What is a mortgage escrow service?</strong></p>
                            <p>An escrow account, in the case of a mortgage, functions as a middleman between a
                                homeowner, tax entities, insurance companies, and anyone else whom the homeowner
                                designates to pay with the funds saved in it. It is typically a savings account managed
                                by an escrow company. Mortgage escrow services are popular with mortgage lenders because
                                they prevent foreclosures due to the lack of payment of property taxes.</p>
                            <p><strong>Why use an escrow service?</strong></p>
                            <p>One of the major advantages of an escrow is convenience. Rather than making individual
                                arrangements to separately save for property taxes and insurance, these expenses are
                                included in one payment. It’s the same principle as automating your monthly bills and
                                401(k) plan savings. A mortgage escrow service offers you a way to save for large bills
                                monthly. That way the money is already there when you need it.</p>
                            <p>Another benefit is that an escrow company will automatically send the payments to the
                                property taxing authorities or insurance companies when they are due.&nbsp; You get are
                                not at risk for late payment penalties or lapses in coverage.&nbsp; You benefit by
                                having <em>piece of mind</em>. You are protected against the risk of your home being
                                auctioned off by the county if those expenses are not paid. It also reduces the
                                uncertainty of the property not being insured against catastrophe.</p>
                            <p><strong>Why use Mortgage Free Escrow?</strong></p>
                            <p>We offer an automated solution to collect a monthly payment that is accumulated in an
                                escrow account we setup for you.&nbsp; We pay your property taxes and insurance bills
                                when they become due.</p>
                            <p>It is your money. We make is easy for you to use your funds if you ever need them.&nbsp;
                                We can disburse some or all your funds to you on request.</p>
                            <p>You will receive monthly email statements and payment reminders.&nbsp; You also have
                                online access to monitor your escrow account.&nbsp; We offer this service for low per
                                payment fee.</p>
                            <p>Get started today!</p>'],
            ['blog_title' => 'I paid off my Mortgage. Do I need an Escrow Service?', 'blog_description' => 'I<h2>Should I Use an Escrow Service?</h2>
                            <p><strong>You paid off your
                                    mortgage.<em>&nbsp; </em></strong><strong><em>Congratulations!</em></strong><strong><em>&nbsp; </em></strong>
                            </p>
                            <p>You now experience the security, financial freedom, and peace of mind you can only feel
                                by being mortgage free.</p>
                            <p>Knowing you are insulated from losing your home in financial difficulties.&nbsp; Saving
                                thousands of dollars in interest charges that is money that can be used for other
                                investments. You have freed up cash for travel, retirement, and other long-term
                                plans.</p>
                            <p><strong>But now your lender no longer offers <em>escrow services</em> for paying property
                                    taxes and homeowners insurance.</strong></p>
                            <p>After you payoff your mortgage, you realize <u>you</u> are now responsible for saving
                                money for paying your two biggest bills of the year.&nbsp; Your <u>property taxes</u>
                                and <u>homeowners’ insurance</u>.</p>
                            <p><strong>What happens if you forget to pay your property taxes or homeowner insurance on
                                    time?</strong></p>
                            <p>If your homeowner’s insurance lapses, your house could burn down, leaving you with a
                                total loss of your hard-earned investment.&nbsp; Likewise, if you don’t pay your taxes,
                                the local taxing authority could put a lien on your home and collect taxes due at a
                                forced foreclosure or tax sale.</p>
                            <p><strong>What is a mortgage escrow service?</strong></p>
                            <p>An escrow account, in the case of a mortgage, functions as a middleman between a
                                homeowner, tax entities, insurance companies, and anyone else whom the homeowner
                                designates to pay with the funds saved in it. It is typically a savings account managed
                                by an escrow company. Mortgage escrow services are popular with mortgage lenders because
                                they prevent foreclosures due to the lack of payment of property taxes.</p>
                            <p><strong>Why use an escrow service?</strong></p>
                            <p>One of the major advantages of an escrow is convenience. Rather than making individual
                                arrangements to separately save for property taxes and insurance, these expenses are
                                included in one payment. It’s the same principle as automating your monthly bills and
                                401(k) plan savings. A mortgage escrow service offers you a way to save for large bills
                                monthly. That way the money is already there when you need it.</p>
                            <p>Another benefit is that an escrow company will automatically send the payments to the
                                property taxing authorities or insurance companies when they are due.&nbsp; You get are
                                not at risk for late payment penalties or lapses in coverage.&nbsp; You benefit by
                                having <em>piece of mind</em>. You are protected against the risk of your home being
                                auctioned off by the county if those expenses are not paid. It also reduces the
                                uncertainty of the property not being insured against catastrophe.</p>
                            <p><strong>Why use Mortgage Free Escrow?</strong></p>
                            <p>We offer an automated solution to collect a monthly payment that is accumulated in an
                                escrow account we setup for you.&nbsp; We pay your property taxes and insurance bills
                                when they become due.</p>
                            <p>It is your money. We make is easy for you to use your funds if you ever need them.&nbsp;
                                We can disburse some or all your funds to you on request.</p>
                            <p>You will receive monthly email statements and payment reminders.&nbsp; You also have
                                online access to monitor your escrow account.&nbsp; We offer this service for low per
                                payment fee.</p>
                            <p>Get started today!</p>'],
            ['blog_title' => 'What happens when your homeowners insurance policy lapses?', 'blog_description' => '<h2>Should I Use an Escrow Service?</h2>
                            <p><strong>You paid off your
                                    mortgage.<em>&nbsp; </em></strong><strong><em>Congratulations!</em></strong><strong><em>&nbsp; </em></strong>
                            </p>
                            <p>You now experience the security, financial freedom, and peace of mind you can only feel
                                by being mortgage free.</p>
                            <p>Knowing you are insulated from losing your home in financial difficulties.&nbsp; Saving
                                thousands of dollars in interest charges that is money that can be used for other
                                investments. You have freed up cash for travel, retirement, and other long-term
                                plans.</p>
                            <p><strong>But now your lender no longer offers <em>escrow services</em> for paying property
                                    taxes and homeowners insurance.</strong></p>
                            <p>After you payoff your mortgage, you realize <u>you</u> are now responsible for saving
                                money for paying your two biggest bills of the year.&nbsp; Your <u>property taxes</u>
                                and <u>homeowners’ insurance</u>.</p>
                            <p><strong>What happens if you forget to pay your property taxes or homeowner insurance on
                                    time?</strong></p>
                            <p>If your homeowner’s insurance lapses, your house could burn down, leaving you with a
                                total loss of your hard-earned investment.&nbsp; Likewise, if you don’t pay your taxes,
                                the local taxing authority could put a lien on your home and collect taxes due at a
                                forced foreclosure or tax sale.</p>
                            <p><strong>What is a mortgage escrow service?</strong></p>
                            <p>An escrow account, in the case of a mortgage, functions as a middleman between a
                                homeowner, tax entities, insurance companies, and anyone else whom the homeowner
                                designates to pay with the funds saved in it. It is typically a savings account managed
                                by an escrow company. Mortgage escrow services are popular with mortgage lenders because
                                they prevent foreclosures due to the lack of payment of property taxes.</p>
                            <p><strong>Why use an escrow service?</strong></p>
                            <p>One of the major advantages of an escrow is convenience. Rather than making individual
                                arrangements to separately save for property taxes and insurance, these expenses are
                                included in one payment. It’s the same principle as automating your monthly bills and
                                401(k) plan savings. A mortgage escrow service offers you a way to save for large bills
                                monthly. That way the money is already there when you need it.</p>
                            <p>Another benefit is that an escrow company will automatically send the payments to the
                                property taxing authorities or insurance companies when they are due.&nbsp; You get are
                                not at risk for late payment penalties or lapses in coverage.&nbsp; You benefit by
                                having <em>piece of mind</em>. You are protected against the risk of your home being
                                auctioned off by the county if those expenses are not paid. It also reduces the
                                uncertainty of the property not being insured against catastrophe.</p>
                            <p><strong>Why use Mortgage Free Escrow?</strong></p>
                            <p>We offer an automated solution to collect a monthly payment that is accumulated in an
                                escrow account we setup for you.&nbsp; We pay your property taxes and insurance bills
                                when they become due.</p>
                            <p>It is your money. We make is easy for you to use your funds if you ever need them.&nbsp;
                                We can disburse some or all your funds to you on request.</p>
                            <p>You will receive monthly email statements and payment reminders.&nbsp; You also have
                                online access to monitor your escrow account.&nbsp; We offer this service for low per
                                payment fee.</p>
                            <p>Get started today!</p>'],
        ];

        Blog::insert($data);
    }
}
