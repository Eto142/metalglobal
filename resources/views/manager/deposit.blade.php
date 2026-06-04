<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Funds</title>
    <link rel="SHORTCUT ICON" href="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/1200px-Bitcoin.svg.png">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f5f7fa;
            --white: #ffffff;
            --border: #e2e8f0;
            --border-strong: #cbd5e1;
            --text: #0f172a;
            --muted: #64748b;
            --light: #94a3b8;
            --blue: #2563eb;
            --blue-light: #eff6ff;
            --blue-border: #bfdbfe;
            --green: #16a34a;
            --green-light: #f0fdf4;
            --green-border: #bbf7d0;
            --orange: #ea580c;
            --orange-light: #fff7ed;
            --red: #dc2626;
            --red-light: #fef2f2;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.06), 0 1px 2px rgba(0,0,0,0.04);
            --shadow: 0 4px 6px -1px rgba(0,0,0,0.07), 0 2px 4px -1px rgba(0,0,0,0.04);
            --radius: 12px;
            --radius-sm: 8px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            min-height: 100vh;
            padding: 32px 16px 60px;
        }

        .page { max-width: 560px; margin: 0 auto; }

        /* Header */
        .breadcrumb {
            display: flex; align-items: center; gap: 6px;
            font-size: 13px; color: var(--muted); margin-bottom: 12px;
        }
        .breadcrumb a { color: var(--blue); text-decoration: none; }

        .page-title { font-size: 26px; font-weight: 700; letter-spacing: -0.5px; }
        .page-subtitle { font-size: 14px; color: var(--muted); margin-top: 4px; margin-bottom: 24px; }

        /* Info banner */
        .info-banner {
            background: var(--blue-light); border: 1px solid var(--blue-border);
            border-radius: var(--radius); padding: 13px 16px; margin-bottom: 20px;
            display: flex; gap: 10px; align-items: flex-start;
        }
        .info-icon {
            width: 20px; height: 20px; background: var(--blue); border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0; color: white; font-size: 11px; font-weight: 700; margin-top: 1px;
        }
        .info-banner p { font-size: 13px; color: #1e40af; line-height: 1.5; }

        /* Steps */
        .steps-row { display: grid; grid-template-columns: repeat(4,1fr); gap: 10px; margin-bottom: 24px; }
        .step-box {
            background: var(--white); border: 1px solid var(--border);
            border-radius: var(--radius); padding: 14px 12px; box-shadow: var(--shadow-sm);
        }
        .step-num-badge {
            width: 24px; height: 24px; background: var(--text); color: white;
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            font-size: 11px; font-weight: 700; margin-bottom: 8px;
        }
        .step-box p { font-size: 11.5px; color: var(--muted); line-height: 1.45; }

        /* Card */
        .card {
            background: var(--white); border: 1px solid var(--border);
            border-radius: 16px; box-shadow: var(--shadow); overflow: hidden; margin-bottom: 16px;
        }
        .card-section { padding: 20px 24px; }
        .card-divider { height: 1px; background: var(--border); }
        .field-label {
            font-size: 12px; font-weight: 600; color: var(--muted);
            letter-spacing: 0.5px; text-transform: uppercase; margin-bottom: 8px;
        }

        /* Select */
        .select-wrap { position: relative; }
        .select-wrap::after {
            content: ''; position: absolute; right: 14px; top: 50%;
            transform: translateY(-50%); width: 0; height: 0;
            border-left: 5px solid transparent; border-right: 5px solid transparent;
            border-top: 5px solid var(--muted); pointer-events: none;
        }
        select {
            width: 100%; padding: 11px 40px 11px 14px; background: var(--white);
            border: 1.5px solid var(--border-strong); border-radius: var(--radius-sm);
            font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 500;
            color: var(--text); appearance: none; outline: none; cursor: pointer; transition: border-color 0.15s;
        }
        select:focus { border-color: var(--blue); }

        /* Tabs */
        .tabs { display: flex; gap: 6px; flex-wrap: wrap; }
        .tab {
            display: flex; align-items: center; gap: 6px; padding: 7px 13px;
            border: 1.5px solid var(--border); border-radius: 100px; background: white;
            color: var(--muted); font-family: 'DM Sans', sans-serif; font-size: 12.5px;
            font-weight: 600; cursor: pointer; transition: all 0.15s;
        }
        .tab img { width: 16px; height: 16px; border-radius: 50%; }
        .tab:hover { border-color: var(--blue); color: var(--blue); }
        .tab.active { background: var(--blue); border-color: var(--blue); color: white; }

        /* QR area */
        .qr-section { display: flex; gap: 24px; align-items: flex-start; transition: opacity 0.2s; }
        .qr-section.fading { opacity: 0; }
        .qr-box {
            flex-shrink: 0; background: white; border: 1.5px solid var(--border);
            border-radius: 12px; padding: 10px; box-shadow: var(--shadow-sm);
        }
        .qr-box img { display: block; width: 130px; height: 130px; }
        .qr-right { flex: 1; display: flex; flex-direction: column; gap: 12px; }

        .network-pill {
            display: inline-flex; align-items: center; gap: 5px;
            background: var(--orange-light); border: 1px solid #fed7aa;
            border-radius: 100px; padding: 4px 10px; font-size: 11.5px;
            font-weight: 600; color: var(--orange); width: fit-content;
        }

        .address-label { font-size: 12px; color: var(--muted); font-weight: 500; margin-bottom: 4px; }
        .address-field { background: var(--bg); border: 1.5px solid var(--border); border-radius: var(--radius-sm); padding: 10px 12px; }
        .address-mono {
            font-family: 'DM Mono', monospace; font-size: 11px; color: var(--green);
            word-break: break-all; line-height: 1.6; margin-bottom: 8px;
        }
        .copy-btn {
            width: 100%; padding: 9px 14px; background: var(--text); color: white;
            border: none; border-radius: var(--radius-sm); font-family: 'DM Sans', sans-serif;
            font-size: 13px; font-weight: 600; cursor: pointer; transition: all 0.15s;
            display: flex; align-items: center; justify-content: center; gap: 6px;
        }
        .copy-btn:hover { background: #1e293b; }
        .copy-btn.copied { background: var(--green); }

        .confirm-notice {
            background: var(--green-light); border: 1px solid var(--green-border);
            border-radius: var(--radius-sm); padding: 10px 14px; font-size: 12px;
            color: #15803d; display: flex; gap: 8px; align-items: flex-start;
        }

        /* Accepted */
        .accepted-card {
            background: white; border: 1px solid var(--border); border-radius: var(--radius);
            box-shadow: var(--shadow-sm); padding: 16px 20px; margin-bottom: 16px;
        }
        .accepted-card h4 {
            font-size: 11.5px; font-weight: 600; color: var(--muted);
            text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 14px;
        }
        .coin-row { display: flex; gap: 10px; align-items: center; flex-wrap: wrap; }
        .coin-chip {
            display: flex; align-items: center; gap: 7px; background: var(--bg);
            border: 1px solid var(--border); border-radius: 100px; padding: 6px 12px;
        }
        .coin-chip img { width: 20px; height: 20px; }
        .coin-chip span { font-size: 12px; font-weight: 600; color: var(--text); }

        /* Back */
        .back-btn {
            width: 100%; padding: 12px; background: white; border: 1.5px solid var(--border-strong);
            border-radius: var(--radius); font-family: 'DM Sans', sans-serif; font-size: 14px;
            font-weight: 600; color: var(--muted); cursor: pointer; transition: all 0.15s;
            display: flex; align-items: center; justify-content: center; gap: 8px;
        }
        .back-btn:hover { border-color: var(--red); color: var(--red); background: var(--red-light); }

        @media (max-width: 420px) {
            .steps-row { grid-template-columns: repeat(2,1fr); }
            .qr-section { flex-direction: column; align-items: center; }
            .qr-right { width: 100%; }
        }
    </style>
</head>
<body>
<div class="page">

    <div class="breadcrumb">
        <a href="#">Dashboard</a>
        <span>›</span>
        <span>Deposit Funds</span>
    </div>
    <h1 class="page-title">Deposit Funds</h1>
    <p class="page-subtitle">Add funds to your account using cryptocurrency</p>

    <div class="info-banner">
        <div class="info-icon">i</div>
        <p>Minimum deposit is <strong>$50 USD</strong>. Funds are credited automatically after network confirmation.</p>
    </div>

    <div class="steps-row">
        <div class="step-box"><div class="step-num-badge">1</div><p>Minimum $50 deposit</p></div>
        <div class="step-box"><div class="step-num-badge">2</div><p>Choose a payment gateway</p></div>
        <div class="step-box"><div class="step-num-badge">3</div><p>Send to wallet address</p></div>
        <div class="step-box"><div class="step-num-badge">4</div><p>Auto-redirect on confirmation</p></div>
    </div>

    <div class="card">
        <div class="card-section">
            <div class="field-label">Payment Gateway</div>
            <div class="select-wrap">
                <select id="walletSelect">
                    <option value="Bitcoin" selected>Bitcoin (BTC)</option>
                    <option value="Ethereum">Ethereum (ETH)</option>
                    <option value="USDC">USD Coin (USDC)</option>
                    <option value="USDT">Tether – TRC20 (USDT)</option>
                    <option value="USDT_ERC20">Tether – ERC20 (USDT)</option>
                </select>
            </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-section">
            <div class="field-label" style="margin-bottom:12px">Quick Select</div>
            <div class="tabs">
                <button class="tab active" data-val="Bitcoin"><img src="https://cryptologos.cc/logos/thumbs/bitcoin.png?v=032" alt="BTC"> BTC</button>
                <button class="tab" data-val="Ethereum"><img src="https://cryptologos.cc/logos/ethereum-eth-logo.png?v=032" alt="ETH"> ETH</button>
                <button class="tab" data-val="USDC"><img src="https://cryptologos.cc/logos/usd-coin-usdc-logo.png?v=032" alt="USDC"> USDC</button>
                <button class="tab" data-val="USDT"><img src="https://cryptologos.cc/logos/tether-usdt-logo.png?v=032" alt="USDT"> USDT TRC20</button>
                <button class="tab" data-val="USDT_ERC20"><img src="https://cryptologos.cc/logos/tether-usdt-logo.png?v=032" alt="USDT"> USDT ERC20</button>
            </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-section">
            <div class="field-label" style="margin-bottom:16px">Wallet Address</div>
            <div class="qr-section" id="qrSection"></div>
        </div>
    </div>

    <div class="accepted-card">
        <h4>Accepted Payments</h4>
        <div class="coin-row">
            <div class="coin-chip"><img src="https://cryptologos.cc/logos/thumbs/bitcoin.png?v=032" alt="BTC"><span>Bitcoin</span></div>
            <div class="coin-chip"><img src="https://cryptologos.cc/logos/ethereum-eth-logo.png?v=032" alt="ETH"><span>Ethereum</span></div>
            <div class="coin-chip"><img src="https://cryptologos.cc/logos/tether-usdt-logo.png?v=032" alt="USDT"><span>Tether</span></div>
            <div class="coin-chip"><img src="https://cryptologos.cc/logos/usd-coin-usdc-logo.png?v=032" alt="USDC"><span>USDC</span></div>
        </div>
    </div>

    <button class="back-btn" onclick="window.history.go(-1)">← Back to Dashboard</button>

</div>
<script>
    const wallets = {
        Bitcoin:     { address:'bc1qyuua6kz2evfpneaptsjphzzpeh4dqnrjx5ry5m', qr:'https://www.bitcoinqrcodemaker.com/api/?style=bitcoin&address=bc1qyuua6kz2evfpneaptsjphzzpeh4dqnrjx5ry5m', network:'Bitcoin Network' },
        Ethereum:    { address:'0x6169F5AccEc5e829a90feB4A89E576133C5b61c3', qr:'https://www.bitcoinqrcodemaker.com/api/?style=ethereum&address=0x6169F5AccEc5e829a90feB4A89E576133C5b61c3', network:'Ethereum (ERC20)' },
        USDC:        { address:'0x6169F5AccEc5e829a90feB4A89E576133C5b61c3', qr:'https://api.qrserver.com/v1/create-qr-code/?data=0x6169F5AccEc5e829a90feB4A89E576133C5b61c3&size=200x200', network:'Ethereum (ERC20)' },
        USDT:        { address:'TKX7dQSWSKmmqFLB57yZ8ZevtbX6yEJjoN', qr:'https://api.qrserver.com/v1/create-qr-code/?data=TKX7dQSWSKmmqFLB57yZ8ZevtbX6yEJjoN&size=200x200', network:'TRON (TRC20)' },
        USDT_ERC20:  { address:'0x6169F5AccEc5e829a90feB4A89E576133C5b61c3', qr:'https://api.qrserver.com/v1/create-qr-code/?data=0x6169F5AccEc5e829a90feB4A89E576133C5b61c3&size=200x200', network:'Ethereum (ERC20)' }
    };

    function render(key) {
        const w = wallets[key];
        const sec = document.getElementById('qrSection');
        sec.classList.add('fading');
        setTimeout(() => {
            sec.innerHTML = `
                <div class="qr-box"><img src="${w.qr}" alt="QR Code"></div>
                <div class="qr-right">
                    <div class="network-pill">◎ ${w.network}</div>
                    <div>
                        <div class="address-label">Send only to this address:</div>
                        <div class="address-field">
                            <div class="address-mono">${w.address}</div>
                            <button class="copy-btn" id="copyBtn" onclick="copyAddr('${w.address}')">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                                Copy Address
                            </button>
                        </div>
                    </div>
                    <div class="confirm-notice">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink:0;margin-top:1px"><polyline points="20 6 9 17 4 12"/></svg>
                        Payment confirmed automatically after network verification.
                    </div>
                </div>`;
            sec.classList.remove('fading');
        }, 180);
    }

    function copyAddr(addr) {
        navigator.clipboard.writeText(addr).then(() => {
            const btn = document.getElementById('copyBtn');
            btn.classList.add('copied');
            btn.innerHTML = `<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Copied!`;
            setTimeout(() => {
                btn.classList.remove('copied');
                btn.innerHTML = `<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg> Copy Address`;
            }, 2000);
        });
    }

    function setActive(val) {
        document.querySelectorAll('.tab').forEach(t => t.classList.toggle('active', t.dataset.val === val));
        document.getElementById('walletSelect').value = val;
        render(val);
    }

    document.getElementById('walletSelect').addEventListener('change', e => setActive(e.target.value));
    document.querySelectorAll('.tab').forEach(t => t.addEventListener('click', () => setActive(t.dataset.val)));
    render('Bitcoin');
</script>
</body>
</html>
