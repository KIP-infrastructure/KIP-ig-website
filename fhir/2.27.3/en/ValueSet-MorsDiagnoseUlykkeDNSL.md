# Mors Diagnosekode - Ulykke (DNSL) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosekode - Ulykke (DNSL)**

## ValueSet: Mors Diagnosekode - Ulykke (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseUlykkeDNSL | *Version*:2.27.3 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnoseUlykkeDNSL |

 
Mors Diagnosekode - Ulykke (DNSL) 

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
  "id" : "MorsDiagnoseUlykkeDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseUlykkeDNSL",
  "version" : "2.27.3",
  "name" : "MorsDiagnoseUlykkeDNSL",
  "title" : "Mors Diagnosekode - Ulykke (DNSL)",
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
  "description" : "Mors Diagnosekode - Ulykke (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder",
      "concept" : [{
        "code" : "DT758",
        "display" : "DT758: Skader af ydre påvirkninger, andre specificerede"
      },
      {
        "code" : "DT888",
        "display" : "DT888: Kompl til kir og med beh ikke klass ansted, andre spec"
      }]
    }]
  }
}

```
