<?php

/**
 * validation.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    'missing_where'                   => 'Matrise mangler "where"-klausul',
    'missing_update'                  => 'Matrise mangler "update"-klausul',
    'invalid_where_key'               => 'JSON inneholder en ugyldig nøkkel for "where"-klausulen',
    'invalid_update_key'              => 'JSON inneholder en ugyldig nøkkel for "update"-klausulen',
    'invalid_query_data'              => 'Det finnes ugyldig data i %s:%s -feltet for din spørring.',
    'invalid_query_account_type'      => 'Spørringen inneholder kontoer av ulike typer, som ikke er tillatt.',
    'invalid_query_currency'          => 'Søket inneholder kontoer som har ulike valuta-innstillinger, som ikke er tillatt.',
    'iban'                            => 'Dette er ikke en gyldig IBAN.',
    'zero_or_more'                    => 'Verdien kan ikke være negativ.',
    'no_asset_account'                => 'This is not an asset account.',
    'date_or_time'                    => 'Verdien må være et gyldig dato- eller klokkeslettformat (ISO 8601).',
    'source_equals_destination'       => 'Kildekontoen er lik destinasjonskonto.',
    'unique_account_number_for_user'  => 'Det ser ut som dette kontonummeret er allerede i bruk.',
    'unique_iban_for_user'            => 'Det ser ut som dette IBAN er allerede i bruk.',
    'reconciled_forbidden_field'      => 'Denne transaksjonen er allerede avstemt. Du kan ikke endre ":field"',
    'deleted_user'                    => 'På grunn av sikkerhetsbegrensninger kan du ikke registreres med denne e-postadresse.',
    'rule_trigger_value'              => 'Denne verdien er ugyldig for den valgte triggeren.',
    'rule_action_value'               => 'Denne verdien er ugyldig for den valgte handlingen.',
    'file_already_attached'           => 'Opplastede fil ":name" er allerede knyttet til dette objektet.',
    'file_attached'                   => 'Opplasting av fil ":name" var vellykket.',
    'must_exist'                      => 'IDen i feltet :attribute finnes ikke i databasen.',
    'all_accounts_equal'              => 'Alle kontoer i dette feltet må være like.',
    'group_title_mandatory'           => 'En gruppetittel er obligatorisk når det er mer enn én transaksjon.',
    'transaction_types_equal'         => 'Alle deler må være av samme type.',
    'invalid_transaction_type'        => 'Ugyldig transaksjonstype.',
    'invalid_selection'               => 'Dine valg er ugyldig.',
    'belongs_user'                    => 'Denne verdien er knyttet til et objekt som ikke ser ut til å eksistere.',
    'belongs_user_or_user_group'      => 'Denne verdien er knyttet til et objekt som ikke ser ut til å eksistere i din nåværende økonomiske administrasjon.',
    'at_least_one_transaction'        => 'Trenger minst én transaksjon.',
    'recurring_transaction_id'        => 'Trenger minst én transaksjon.',
    'need_id_to_match'                => 'Du må sende inn denne oppføringen med en ID for at APIen skal kunne identifisere den.',
    'too_many_unmatched'              => 'For mange innsendte transaksjoner kan ikke identifiseres med sine respektive databasoppføringer. Forsikre deg om at eksisterende oppføringer har en gyldig ID.',
    'id_does_not_match'               => 'Submitted ID #:id samsvarer ikke med forventet ID. Sørg for at det samsvarer eller utelat feltet.',
    'at_least_one_repetition'         => 'Trenger minst en gjentagelse.',
    'require_repeat_until'            => 'Krever enten et antall repetisjoner eller en slutt dato (gjentas til). Ikke begge.',
    'require_currency_info'           => 'Innholdet i dette feltet er ugyldig uten valutainformasjon.',
    'not_transfer_account'            => 'Denne kontoen er ikke en konto som kan benyttes for overføringer.',
    'require_currency_amount'         => 'Innholdet i dette feltet er ugyldig uten utenlandsk beløpsinformasjon.',
    'require_foreign_currency'        => 'Dette feltet krever et tall',
    'require_foreign_dest'            => 'Denne feltverdien må samsvare med valutaen til målkontoen.',
    'require_foreign_src'             => 'Denne feltverdien må samsvare med valutaen til kildekontoen.',
    'equal_description'               => 'Transaksjonsbeskrivelsen bør ikke være lik global beskrivelse.',
    'file_invalid_mime'               => 'Kan ikke akseptere fil ":name" av typen ":mime" for opplasting.',
    'file_too_large'                  => '":name"-filen er for stor.',
    'belongs_to_user'                 => 'Verdien av :attribute er ukjent.',
    'accepted'                        => ':attribute må bli godtatt.',
    'bic'                             => 'Dette er ikke en gyldig BIC.',
    'at_least_one_trigger'            => 'Regel må ha minst en trigger.',
    'at_least_one_active_trigger'     => 'Regel må ha minst en aktiv trigger.',
    'at_least_one_action'             => 'Regel må ha minst en aksjon.',
    'at_least_one_active_action'      => 'Regel må ha minst en aktiv handling.',
    'base64'                          => 'Dette er ikke godkjent base64 kodet data.',
    'model_id_invalid'                => 'Den angitte ID er ugyldig for denne modellen.',
    'less'                            => ':attribute må være mindre enn 10,000,000',
    'active_url'                      => ':attribute er ikke en gyldig URL.',
    'after'                           => ':attribute må være en dato etter :date.',
    'date_after'                      => 'Startdatoen må være før sluttdato.',
    'alpha'                           => ':attribute kan kun inneholde bokstaver.',
    'alpha_dash'                      => ':attribute kan bare inneholde bokstaver, tall og bindestreker.',
    'alpha_num'                       => ':attribute kan bare inneholde bokstaver og tall.',
    'array'                           => ':attribute må være en liste.',
    'unique_for_user'                 => 'Det finnes allerede en forekomst med :attribute.',
    'before'                          => ':attribute må være en dato før :date.',
    'unique_object_for_user'          => 'Dette navnet er allerede i bruk.',
    'unique_account_for_user'         => 'Dette konto navnet er allerede i bruk.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'between.numeric'                 => ':attribute må være en verdi mellom :min og :max.',
    'between.file'                    => ':attribute må være mellom :min og :max kilobyte.',
    'between.string'                  => ':attribute må være mellom :min og :max tegn.',
    'between.array'                   => ':attribute må ha mellom :min og :max elementer.',
    'boolean'                         => ':attribute må være sann eller usann.',
    'confirmed'                       => ':attribute bekreftelsen stemmer ikke overens.',
    'date'                            => ':attribute er ikke en gyldig dato.',
    'date_format'                     => ':attribute samsvarer ikke med formatet :format.',
    'different'                       => ':attribute og :other må være forskjellig.',
    'digits'                          => ':attribute må være :digits sifre.',
    'digits_between'                  => ':attribute må være mellom :min og :max sifre.',
    'email'                           => ':attribute må være en gyldig epostaddresse.',
    'filled'                          => ':attribute må fylles ut.',
    'exists'                          => 'Den valgte :attribute er ikke gyldig.',
    'image'                           => ':attribute må være et bilde.',
    'in'                              => 'Den valgte :attribute er ikke gyldig.',
    'integer'                         => ':attribute må være et heltall.',
    'ip'                              => ':attribute må være en gyldig IP-addresse.',
    'json'                            => ':attribute må være en gyldig JSON streng.',
    'max.numeric'                     => ':attribute ikke kan være større enn :max.',
    'max.file'                        => ':attribute ikke kan være større enn :max kilobytes.',
    'max.string'                      => ':attribute ikke kan være større enn :max tegn.',
    'max.array'                       => ':attribute kan ikke inneholde mer enn :max elementer.',
    'mimes'                           => ':attribute må være en fil av type: :values.',
    'min.numeric'                     => ':attribute må være minst :min.',
    'lte.numeric'                     => ':attribute må være mindre enn eller lik :value.',
    'min.file'                        => ':attribute må være minst :min kilobytes.',
    'min.string'                      => ':attribute må være minst :min tegn.',
    'min.array'                       => ':attribute må inneholde minst :min elementer.',
    'not_in'                          => 'Den valgte :attribute er ikke gyldig.',
    'numeric'                         => ':attribute må være et tall.',
    'numeric_native'                  => 'Den normale beløpet må være et nummer.',
    'numeric_destination'             => 'Destinasjons beløpet må være et nummer.',
    'numeric_source'                  => 'Kilde beløpet må være et nummer.',
    'regex'                           => ':attribute formatet er ugyldig.',
    'required'                        => ':attribute feltet må fylles ut.',
    'required_if'                     => ':attribute feltet er påkrevd når :other er :value.',
    'required_unless'                 => ':attribute feltet er påkrevd hvis ikke :other er i :values.',
    'required_with'                   => ':attribute feltet er nødvendig når :values er tilstede.',
    'required_with_all'               => ':attribute feltet er nødvendig når :values er tilstede.',
    'required_without'                => ':attribute er påkrevd når :values ikke er definert.',
    'required_without_all'            => ':attribute er påkrevd når ingen av :values er definert.',
    'same'                            => ':attribute og :other må være like.',
    'size.numeric'                    => ':attribute må være :size.',
    'amount_min_over_max'             => 'Minimumsbeløpet kan ikke være større enn maksimumsbeløpet.',
    'size.file'                       => ':attribute må være :size kilobyte.',
    'size.string'                     => ':attribute må være :size tegn.',
    'size.array'                      => ':attribute må inneholde :size elementer.',
    'unique'                          => ':attribute har allerede blitt tatt.',
    'string'                          => ':attribute må være en streng.',
    'url'                             => ':attribute formatet er ugyldig.',
    'timezone'                        => ':attribute må være en gyldig tidssone.',
    '2fa_code'                        => ':attribute formatet er ugyldig.',
    'dimensions'                      => ':attribute har ugyldig bilde dimensjoner.',
    'distinct'                        => ':attribute feltet har en duplikatverdi.',
    'file'                            => ':attribute må være en fil.',
    'in_array'                        => 'Feltet :attribute finnes ikke i :other.',
    'present'                         => ':attribute feltet må være definert.',
    'amount_zero'                     => 'Totalbeløpet kan ikke være null.',
    'current_target_amount'           => 'Det nåværende beløpet må være mindre enn målbeløpet.',
    'unique_piggy_bank_for_user'      => 'Navnet på sparegris må være unik.',
    'unique_object_group'             => 'Gruppenavnet må være unikt',
    'starts_with'                     => 'Verdien må starte med :values.',
    'unique_webhook'                  => 'Du har allerede en webhook med denne kombinasjonen URL, utløser, respons og levering.',
    'unique_existing_webhook'         => 'Du har allerede en annen webhook med denne kombinasjonen URL, utløser, respons og levering.',
    'same_account_type'               => 'Begge kontoer må være av samme kontotype',
    'same_account_currency'           => 'Begge kontoer må ha samme valuta-innstilling',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'secure_password'                 => 'Dette er ikke et sikkert passord. Vennligst prøv igjen. For mer informasjon, se https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'       => 'Ugyldig repetisjons type for gjentakende transaksjoner.',
    'valid_recurrence_rep_moment'     => 'Ugyldig repetisjons tid for denne type repetisjon.',
    'invalid_account_info'            => 'Ugyldig konto informasjon.',
    'attributes'                      => [
        'email'                   => 'epostadresse',
        'description'             => 'beskrivelse',
        'amount'                  => 'beløp',
        'transactions.*.amount'   => 'transaksjonsbeløp',
        'name'                    => 'navn',
        'piggy_bank_id'           => 'sparegris ID',
        'targetamount'            => 'målbeløp',
        'opening_balance_date'    => 'åpningssaldo dato',
        'opening_balance'         => 'åpningssaldo',
        'match'                   => 'match',
        'amount_min'              => 'minimumsbeløp',
        'amount_max'              => 'maksimumsbeløp',
        'title'                   => 'tittel',
        'tag'                     => 'tag',
        'transaction_description' => 'transaksjonsbeskrivelse',
        'rule-action-value.1'     => 'regel aksjonsverdi #1',
        'rule-action-value.2'     => 'regel aksjonsverdi #2',
        'rule-action-value.3'     => 'regel aksjonsverdi #3',
        'rule-action-value.4'     => 'regel aksjonsverdi #4',
        'rule-action-value.5'     => 'regel aksjonsverdi #5',
        'rule-action.1'           => 'regel aksjon#1',
        'rule-action.2'           => 'regel aksjon#2',
        'rule-action.3'           => 'regel aksjon#3',
        'rule-action.4'           => 'regel aksjon#4',
        'rule-action.5'           => 'regel aksjon#5',
        'rule-trigger-value.1'    => 'regel trigger verdi #1',
        'rule-trigger-value.2'    => 'regel trigger verdi #2',
        'rule-trigger-value.3'    => 'regel trigger verdi #3',
        'rule-trigger-value.4'    => 'regel trigger verdi #4',
        'rule-trigger-value.5'    => 'regel trigger verdi #5',
        'rule-trigger.1'          => 'regel trigger #1',
        'rule-trigger.2'          => 'regel trigger #2',
        'rule-trigger.3'          => 'regel trigger #3',
        'rule-trigger.4'          => 'regel trigger #4',
        'rule-trigger.5'          => 'regel trigger #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'     => 'Trenger en gyldig kildekonto-ID og/eller gyldig kildekonto-navn for å fortsette.',
    'withdrawal_source_bad_data'      => '[a] Kunne ikke finne en gyldig kildekonto ved søk etter ID ":id" eller navn ":name".',
    'withdrawal_dest_need_data'       => '[a] Trenger gyldig målkonto-ID og/eller gyldig målkonto-navn for å fortsette.',
    'withdrawal_dest_bad_data'        => 'Kunne ikke finne en gyldig målkonto ved søk etter ID ":id" eller navn ":name".',

    'withdrawal_dest_iban_exists'     => 'Denne destinasjonskontoens IBAN er allerede i bruk av en eiendomskonto eller en ansvarskonto og kan ikke brukes som en uttaksdestinasjon.',
    'deposit_src_iban_exists'         => 'Denne kildekontoens IBAN er allerede i bruk av en eiendomskonto eller en ansvarskonto og kan ikke brukes som innskuddskilde.',

    'reconciliation_source_bad_data'  => 'Kunne ikke finne en gyldig avstemmingskonto ved søk etter ID ":id" eller navn ":name".',

    'generic_source_bad_data'         => '[e] Kunne ikke finne en gyldig kildekonto ved søk etter ID ":id" eller navn ":name".',

    'deposit_source_need_data'        => 'Trenger en gyldig kilde konto-ID og/eller gyldig kilde kontonavn for å fortsette.',
    'deposit_source_bad_data'         => '[b] Kunne ikke finne en gyldig kildekonto ved søk etter ID ":id" eller navn ":name".',
    'deposit_dest_need_data'          => '[b] Trenger en gyldig destinasjons konto-ID og/eller gyldig destinasjons kontonavn for å fortsette.',
    'deposit_dest_bad_data'           => 'Kunne ikke finne en gyldig destinasjonskonto ved søk etter ID ":id" eller navn ":name".',
    'deposit_dest_wrong_type'         => 'Den oppgitte målkontoen er ikke av riktig type.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'transfer_source_need_data'       => 'Trenger en gyldig kildekonto ID og/eller gyldig kilde kontonavn for å fortsette.',
    'transfer_source_bad_data'        => '[c] Kunne ikke finne en gyldig kildekonto ved søk etter ID ":id" eller navn ":name".',
    'transfer_dest_need_data'         => '[c] Trenger en gyldig destinasjons konto-ID og/eller gyldig destinasjons kontonavn for å fortsette.',
    'transfer_dest_bad_data'          => 'Kunne ikke finne en gyldig destinasjonskonto ved søk etter ID ":id" eller navn ":name".',
    'need_id_in_edit'                 => 'Hver del må ha transaction_journal_id (enten gyldig ID eller 0).',

    'ob_source_need_data'             => 'Trenger en gyldig kildekonto ID og/eller gyldig kildekonto navn for å fortsette.',
    'lc_source_need_data'             => 'Trenger en gyldig kildekonto ID for å fortsette.',
    'ob_dest_need_data'               => '[d] Trenger en gyldig destinasjons konto-ID og/eller gyldig destinasjons kontonavn for å fortsette.',
    'ob_dest_bad_data'                => 'Kunne ikke finne en gyldig destinasjonskonto ved søk etter ID ":id" eller navn ":name".',
    'reconciliation_either_account'   => 'For å utføre en avstemming, må du enten oppgi en kilde eller en målkonto. Ikke begge eller ingen.',

    'generic_invalid_source'          => 'Du kan ikke bruke denne kontoen som kildekonto.',
    'generic_invalid_destination'     => 'Du kan ikke bruke denne kontoen som destinasjonskonto.',

    'generic_no_source'               => 'Du må sende inn kontoinformasjon eller sende inn transaksjons-journal-ID.',
    'generic_no_destination'          => 'Du må sende inn kontoinformasjon om mottakerkontoen, eller sende inn en transaksjons-journal-ID.',

    'gte.numeric'                     => ':attribute må være større enn eller lik :value.',
    'gt.numeric'                      => ':attribute må være større enn :value.',
    'gte.file'                        => ':attribute må være større enn eller lik :value kilobyte.',
    'gte.string'                      => ':attribute må være større enn eller lik :value tegn.',
    'gte.array'                       => ':attribute må ha :value elementer eller mer.',

    'amount_required_for_auto_budget' => 'Beløpet er påkrevd.',
    'auto_budget_amount_positive'     => 'Beløpet må være mer enn null.',
    'auto_budget_period_mandatory'    => 'Auto budsjett perioden er et obligatorisk felt.',

    // no access to administration:
    'no_access_user_group'            => 'Du har ikke rettigheter til denne handlingen.',
];

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */

