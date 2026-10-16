# Påvirkning Pågående (RETSPSYK) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Påvirkning Pågående (RETSPSYK)**

## ValueSet: Påvirkning Pågående (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PaavirkningPaagaaendeRETSPSYK | *Version*:2.27.0 |
| Active as of 2023-05-11 | *Computable Name*:PaavirkningPaagaaendeRETSPSYK |

 
Påvirkning Pågående (RETSPSYK) 

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
  "id" : "PaavirkningPaagaaendeRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PaavirkningPaagaaendeRETSPSYK",
  "version" : "2.27.0",
  "name" : "PaavirkningPaagaaendeRETSPSYK",
  "title" : "Påvirkning Pågående (RETSPSYK)",
  "status" : "active",
  "date" : "2023-05-11T00:00:00+02:00",
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
  "description" : "Påvirkning Pågående (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AlchoholDrugs",
      "concept" : [{
        "code" : "alchohol",
        "display" : "Alkohol"
      },
      {
        "code" : "cannabis",
        "display" : "Hash"
      },
      {
        "code" : "central_stimulants",
        "display" : "Centralstimulerende stoffer"
      },
      {
        "code" : "opioids",
        "display" : "Opioider"
      },
      {
        "code" : "benzodiazepines",
        "display" : "Benzodiazepiner"
      },
      {
        "code" : "steroids",
        "display" : "Steroider"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet (anfør hvilke)"
      }]
    }]
  }
}

```
