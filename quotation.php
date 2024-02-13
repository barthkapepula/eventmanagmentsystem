<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Quotation Generator</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Quotation Generator</h2>
        <form action="generate_quotation.php" method="post">
            <div class="form-group">
                <label for="userName">User Name:</label>
                <input type="text" class="form-control" id="userName" name="userName" required>
            </div>

            <div class="form-group">
                <label for="facility">Select Facility:</label>
                <select class="form-control" id="facility" name="facility" required>
                    <option value="Pavilion">Pavilion (ZMW 8,000 - 15,000)</option>
                    <option value="Arena">Arena (Main) (ZMW 70,000)</option>
                    <option value="MukuyuArena">Mukuyu Arena (ZMW 20,000)</option>
                    <option value="OtherArena">Other Arenas (ZMW 20,000)</option>
                    <option value="Comesa Village Chalets">Comesa Village Chalets (ZMW 20,000)</option>
                    <option value="Kataya Pavilion">Kataya Pavilion (ZMW 8,000)</option>
                    <option value="Zambia Hall Annex">Zambia Hall Annex (ZMW 15,000)</option>

                                    </select>
            </div>

            <div class="form-group">
                <label for="amount">Amount (ZMW):</label>
                <input type="text" class="form-control" id="amount" name="amount" readonly>
            </div>

            <div class="form-group">
                <label for="otherDetails">Other Details:</label>
                <textarea class="form-control" id="otherDetails" name="otherDetails"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Generate Quotation</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script>
    // Update amount based on selected facility
    document.getElementById('facility').addEventListener('change', function () {
        var selectedFacility = this.value;
        var amountField = document.getElementById('amount');

        switch (selectedFacility) {
            case 'Pavilion':
                amountField.value = 'ZMW 8,000 - 15,000';
                break;
            case 'Arena':
                amountField.value = 'ZMW 70,000';
                break;
            case 'MukuyuArena':
            case 'OtherArena':
                amountField.value = 'ZMW 20,000';
                break;
            case 'Comesa Village Chalets':
                amountField.value = 'ZMW 20,000';
                break;
            case 'Kataya Pavilion':
                amountField.value = 'ZMW 8,000';
                break;
            case 'Zambia Hall Annex':
                amountField.value = 'ZMW 15,000';
                break;
            default:
                amountField.value = '';
        }
    });
</script>



</body>

</html>
