<h2 class="uk-text-center uk-margin-bottom midnight"> Buku Tamu </h2>
<button class="uk-button uk-button-success uk-align-center" type="button"  style="margin-bottom:0px;" href="#buku-tamu" uk-toggle id="list-tamu">ISI BUKU TAMU</button>

    <div id="buku-tamu" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header" >
                <h2 class="uk-modal-title">Buku Tamu</h2>
            </div>
            
            <form role="form" method="POST" action="{{ route('guest.store') }}">
            {{ csrf_field() }}
                <div class="uk-modal-body" uk-overflow-auto>
                
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                            <div class="uk-form-label">Nama :</div>
                            <input name="name" class="uk-input" type="text" placeholder="Nama anda" required>
                            <span style="font-size:12px;"><span id="charName"></span></span>
                        </div>
                        {{-- <div class="uk-margin">
                            <div class="uk-form-label">Pilih Kehadiran :</div>
                            <select name="status" class="uk-select" id="status" required>
                                <option value="hadir" required>Berkenan hadir</option>
                                <option value="tidak" required>Maaf tidak bisa hadir</option>
                            </select>
                        </div>
                        <div class="uk-margin" id="person">
                            <div class="uk-form-label">Anda datang dengan siapa ? (mohon maaf 1 undangan hanya untuk maksimal 2 orang)</div>
                                <label><input class="uk-radio" type="radio" name="person" value="Suami_atau_istri"> Suami / Istri</label>
                                <label><input class="uk-radio" type="radio" name="person" value="Anak"> Anak</label>
                                <label><input class="uk-radio" type="radio" name="person" value="Sendiri"> Sendiri</label>
                        </div> --}}
                        <div class="uk-margin">
                            <div class="uk-form-label">Isi Ucapan :</div>
                            <textarea name="description" class="uk-textarea" rows="5" placeholder="Ucapan Selamat" onkeyup="if (!window.__cfRLUnblockHandlers) return false; countComm(this)" data-cf-modified-1dafe858be15d8421fab611c-="" required></textarea>
                            <span style="font-size:12px;"><span id="charNum"></span></span>
                        </div>
                    </fieldset>
                </div>
        
                <div class="uk-modal-footer uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close">Cancel</button>
                    <button class="uk-button uk-button-primary" type="submit" >Submit</button>
                </div>
            </form>
        </div>
    </div>
