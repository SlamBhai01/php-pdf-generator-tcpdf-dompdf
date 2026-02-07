<style>
    body { font-family: 'dejavusans', sans-serif; }
    .title { text-align: center; font-size: 18pt; font-weight: bold; margin-bottom: 20px; }
    .form-section { line-height: 2; margin-bottom: 20px; }
    .penalty-box { text-align: center; font-weight: bold; margin: 20px 0; border: 1px dashed #000; padding: 10px; }
    .footer { margin-top: 50px;  }
    .eng-label { direction: ltr; unicode-bidi: isolate; display: inline-block; }
</style>

<div class="title">إشعار إداري بتوقيع جزاء</div>

<div class="form-section">
    <bdi class="eng-label">{{ $data['labels']['name'] }}</bdi> : <strong>{{ $data['employee_name'] }}</strong><br>
    <bdi class="eng-label">{{ $data['labels']['id'] }}</bdi> :  <strong>{{ $data['employee_id'] }}</strong> <br>
    <bdi class="eng-label">{{ $data['labels']['title'] }}</bdi> :  <strong>{{ $data['job_title'] }}</strong> <br>
    <bdi class="eng-label">{{ $data['labels']['project'] }}</bdi> :  <strong>{{ $data['project_name'] }}</strong>
</div>

<div class="form-section">
    نود إحاطتكم علماً بأنه بتاريخ ( {{ $data['violation_date'] }} م ) تم ارتكابكم للمخالفة التالية:<br>
    <strong>( {{ $data['penalty_name'] }} )</strong>
</div>

<p>وبعد التحقق من الواقعة وإجراء ما يلزم من مراجعة وتحقيق للتأكد من صحة المخالفة المنسوبة إليكم، فقد صدر قرار إداري بتوقيع الجزاء المناسب.</p>

<p>وبناءً على سياسات ولوائح الشركة الداخلية، ووفقاً لما ورد في لائحة تنظيم العمل المعتمدة بالشركة، تقرر توقيع الجزاء التالي عليكم:</p>

<div class="penalty-box">
    ( {{ $data['penalty_details'] }} )
</div>

<p>وعليه تم إشعاركم بذلك للعمل بموجبه، مع التنبيه بضرورة الالتزام بأنظمة وتعليمات الشركة مستقبلاً، حفاظاً على مصلحة العمل.</p>
<div class="footer">
    تفضلوا بقبول فائق الاحترام،،<br><br>
    <strong>إدارة الموارد البشرية</strong>
</div>
