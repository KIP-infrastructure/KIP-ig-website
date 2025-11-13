# Mors Diagnosekoder (DNSL) - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosekoder (DNSL)**

## CodeSystem: Mors Diagnosekoder (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder | *Version*:2.14.0 |
| Active as of 2024-01-31 | *Computable Name*:MorsDiagnosekoder |

 
Mors Diagnosekoder (DNSL) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MorsDiagnoseForskelligtDNSL](ValueSet-MorsDiagnoseForskelligtDNSL.md)
* [MorsDiagnoseInfektionerDNSL](ValueSet-MorsDiagnoseInfektionerDNSL.md)
* [MorsDiagnoseKardialDNSL](ValueSet-MorsDiagnoseKardialDNSL.md)
* [MorsDiagnoseLeverDNSL](ValueSet-MorsDiagnoseLeverDNSL.md)
* [MorsDiagnoseSocialtDNSL](ValueSet-MorsDiagnoseSocialtDNSL.md)
* [MorsDiagnoseUlykkeDNSL](ValueSet-MorsDiagnoseUlykkeDNSL.md)
* [MorsDiagnoseVaskulaerDNSL](ValueSet-MorsDiagnoseVaskulaerDNSL.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MorsDiagnosekoder",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder",
  "version" : "2.14.0",
  "name" : "MorsDiagnosekoder",
  "title" : "Mors Diagnosekoder (DNSL)",
  "status" : "active",
  "date" : "2024-01-31T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Mors Diagnosekoder (DNSL)",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 47,
  "concept" : [
    {
      "code" : "DA162",
      "display" : "DA162: Lungetuberkulose u angivelse af bakt eller hist verif"
    },
    {
      "code" : "DA188",
      "display" : "DA188: Tuberkulose i andre specificerede organer"
    },
    {
      "code" : "DA419",
      "display" : "DA419: Septikæmi uden specifikation"
    },
    {
      "code" : "DB181",
      "display" : "DB181: Hepatitis B viralis Chronica u Delta agens"
    },
    {
      "code" : "DB182",
      "display" : "DB182: Hepatitis C viralis chronica"
    },
    {
      "code" : "DB188",
      "display" : "DB188: Hepatitis viralis Chronica alia"
    },
    {
      "code" : "DB349",
      "display" : "DB349: Virusinfektion uden specifikation"
    },
    {
      "code" : "DB999",
      "display" : "DB999: Andre og ikke specificerede infektiøse sygdomme"
    },
    {
      "code" : "DD489",
      "display" : "DD489: Neopl uden specifikation og lokalisation"
    },
    {
      "code" : "DD629",
      "display" : "DD629: Akut anæmi efter blødning"
    },
    {
      "code" : "DD729",
      "display" : "DD729: Sygdomme i hvide blodlegemer uden specifikation"
    },
    {
      "code" : "DE875",
      "display" : "DE875: Kaliumoverskud"
    },
    {
      "code" : "DE876A",
      "display" : "DE876A: Hypokaliæmi"
    },
    {
      "code" : "DE877",
      "display" : "DE877: Væskeoverskud"
    },
    {
      "code" : "DF039",
      "display" : "DF039: Demens uden specifikation"
    },
    {
      "code" : "DI110",
      "display" : "DI110: Incompensatio corids hypertensiva"
    },
    {
      "code" : "DI219",
      "display" : "DI219: Akut myokardieinfarkt (AMI uden specifikation"
    },
    {
      "code" : "DI269",
      "display" : "DI269: Embolia pulmonis u akut cor pulmonale"
    },
    {
      "code" : "DI461",
      "display" : "DI461: Pludselig hjertedød"
    },
    {
      "code" : "DI509",
      "display" : "DI509: Hjerteinkompensation udne specifikation"
    },
    {
      "code" : "DI649",
      "display" : "DI649: Apoplexia cerebri uden specifikation"
    },
    {
      "code" : "DI772",
      "display" : "DI772: Ruptura arteriae"
    },
    {
      "code" : "DJ129",
      "display" : "DJ129: Viruspneumoni uden specifikation"
    },
    {
      "code" : "DJ159",
      "display" : "DJ159: Bakteriel pneumoni uden specifikation"
    },
    {
      "code" : "DJ168",
      "display" : "DJ168: Pneumonier forårsaget af andre specificerede infekt agentia"
    },
    {
      "code" : "DJ449",
      "display" : "DJ449: Kronisk obstruktiv lungesygdom uden specifikation"
    },
    {
      "code" : "DK281",
      "display" : "DK281: Ulcus gastrojejunale pepticum acutum m perforation"
    },
    {
      "code" : "DK550",
      "display" : "DK550: Akut karsygdom i tarm"
    },
    {
      "code" : "DK631",
      "display" : "DK631: Perforatio intestini non traumatica"
    },
    {
      "code" : "DK638C",
      "display" : "DK638C: Haemorrhagia tractus gastrointestinalis"
    },
    {
      "code" : "DK650",
      "display" : "DK650: Peritonitis acuta"
    },
    {
      "code" : "DK668",
      "display" : "DK668: Sygdom i bughinde, andre specificerede"
    },
    {
      "code" : "DK719",
      "display" : "DK719: Toksisk leversygdom uden specifikation"
    },
    {
      "code" : "DK729",
      "display" : "DK729: Leversvigt uden specifikation"
    },
    {
      "code" : "DK746",
      "display" : "DK746: Cirrhosis hepatis, anden og uden specifikation"
    },
    {
      "code" : "DK859",
      "display" : "DK859: Pancreatitis acuta"
    },
    {
      "code" : "DN188B",
      "display" : "DN188B: Pericarditis, uræmisk"
    },
    {
      "code" : "DN199",
      "display" : "DN199: Uræmi uden specifikation"
    },
    {
      "code" : "DQ446",
      "display" : "DQ446: Hepar cysticum congenitum"
    },
    {
      "code" : "DR589",
      "display" : "DR589: Haemorrhagia uden specifikation"
    },
    {
      "code" : "DR649",
      "display" : "DR649: Cachexia"
    },
    {
      "code" : "DR999",
      "display" : "DR999: Mors uden specifkation"
    },
    {
      "code" : "DT758",
      "display" : "DT758: Skader af ydre påvirkninger, andre specificerede"
    },
    {
      "code" : "DT810",
      "display" : "DT810: Haemorrhagia postop et haematoma postop ikke klas ansted"
    },
    {
      "code" : "DT824",
      "display" : "DT824: Complicatio katherisationis vasorum dialyseos"
    },
    {
      "code" : "DT888",
      "display" : "DT888: Kompl til kir og med beh ikke klass ansted, andre spec"
    },
    {
      "code" : "DZ915",
      "display" : "DZ915: Selvpåført skade"
    }
  ]
}

```
