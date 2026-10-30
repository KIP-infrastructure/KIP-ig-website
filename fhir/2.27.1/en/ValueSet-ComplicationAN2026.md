# Anæstesi komplikationer 2026 - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesi komplikationer 2026**

## ValueSet: Anæstesi komplikationer 2026 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ComplicationAN2026 | *Version*:2.27.1 |
| Active as of 2022-06-01 | *Computable Name*:ComplicationAN2026 |

 
Anæstesi komplikationer 

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
  "id" : "ComplicationAN2026",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ComplicationAN2026",
  "version" : "2.27.1",
  "name" : "ComplicationAN2026",
  "title" : "Anæstesi komplikationer 2026",
  "status" : "active",
  "date" : "2022-06-01T00:00:00+02:00",
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
  "description" : "Anæstesi komplikationer",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "anafylSchock",
        "display" : "Anafylaktisk reaktion/shock"
      },
      {
        "code" : "anInterrupt",
        "display" : "Anæstesi afbrudt"
      },
      {
        "code" : "aspiration",
        "display" : "Aspiration"
      },
      {
        "code" : "duraptAcc",
        "display" : "Durapunktur accidentel"
      },
      {
        "code" : "heartFail",
        "display" : "Hjertestop"
      },
      {
        "code" : "huskeAN",
        "display" : "Huskeanæstesi"
      },
      {
        "code" : "malignHyp",
        "display" : "Malign Hypertermi mistanke"
      },
      {
        "code" : "neuMuscBlock",
        "display" : "Neuromuskulær blokade, forlænget virkning"
      },
      {
        "code" : "dentInj",
        "display" : "Tandskade"
      },
      {
        "code" : "mors",
        "display" : "Mors, uventet"
      }]
    }]
  }
}

```
