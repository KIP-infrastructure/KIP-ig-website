# Mors Diagnosekode - Lever (DNSL) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosekode - Lever (DNSL)**

## ValueSet: Mors Diagnosekode - Lever (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseLeverDNSL | *Version*:2.27.1 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnoseLeverDNSL |

 
Mors Diagnosekode - Leverlidelser (DNSL) 

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
  "id" : "MorsDiagnoseLeverDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseLeverDNSL",
  "version" : "2.27.1",
  "name" : "MorsDiagnoseLeverDNSL",
  "title" : "Mors Diagnosekode - Lever (DNSL)",
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
  "description" : "Mors Diagnosekode - Leverlidelser (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder",
      "concept" : [{
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
        "code" : "DQ446",
        "display" : "DQ446: Hepar cysticum congenitum"
      }]
    }]
  }
}

```
