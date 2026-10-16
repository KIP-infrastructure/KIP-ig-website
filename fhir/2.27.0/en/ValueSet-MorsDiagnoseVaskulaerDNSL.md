# Mors Diagnosekode - Vaskulær (DNSL) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosekode - Vaskulær (DNSL)**

## ValueSet: Mors Diagnosekode - Vaskulær (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseVaskulaerDNSL | *Version*:2.27.0 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnoseVaskulaerDNSL |

 
Mors Diagnosekode - Vaskulære årsager (DNSL) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "MorsDiagnoseVaskulaerDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseVaskulaerDNSL",
  "version" : "2.27.0",
  "name" : "MorsDiagnoseVaskulaerDNSL",
  "title" : "Mors Diagnosekode - Vaskulær (DNSL)",
  "status" : "active",
  "date" : "2024-01-10T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Mors Diagnosekode - Vaskulære årsager (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder",
      "concept" : [{
        "code" : "DD629",
        "display" : "DD629: Akut anæmi efter blødning"
      },
      {
        "code" : "DI269",
        "display" : "DI269: Embolia pulmonis u akut cor pulmonale"
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
        "code" : "DK550",
        "display" : "DK550: Akut karsygdom i tarm"
      },
      {
        "code" : "DK638C",
        "display" : "DK638C: Haemorrhagia tractus gastrointestinalis"
      },
      {
        "code" : "DR589",
        "display" : "DR589: Haemorrhagia uden specifikation"
      },
      {
        "code" : "DT810",
        "display" : "DT810: Haemorrhagia postop et haematoma postop ikke klas ansted"
      },
      {
        "code" : "DT824",
        "display" : "DT824: Complicatio katherisationis vasorum dialyseos"
      }]
    }]
  }
}

```
