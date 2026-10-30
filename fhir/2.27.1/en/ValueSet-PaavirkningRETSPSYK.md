# Påvirkning (RETSPSYK) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Påvirkning (RETSPSYK)**

## ValueSet: Påvirkning (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PaavirkningRETSPSYK | *Version*:2.27.1 |
| Active as of 2022-09-30 | *Computable Name*:PaavirkningRETSPSYK |

 
Påvirkning (RETSPSYK) 

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
  "id" : "PaavirkningRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PaavirkningRETSPSYK",
  "version" : "2.27.1",
  "name" : "PaavirkningRETSPSYK",
  "title" : "Påvirkning (RETSPSYK)",
  "status" : "active",
  "date" : "2022-09-30T00:00:00+02:00",
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
  "description" : "Påvirkning (RETSPSYK)",
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
