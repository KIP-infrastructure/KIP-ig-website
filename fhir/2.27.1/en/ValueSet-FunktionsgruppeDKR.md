# Funktionsgruppe (DKR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Funktionsgruppe (DKR)**

## ValueSet: Funktionsgruppe (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FunktionsgruppeDKR | *Version*:2.27.1 |
| Active as of 2022-10-12 | *Computable Name*:FunktionsgruppeDKR |

 
Funktionsgruppe (DHR) 

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
  "id" : "FunktionsgruppeDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FunktionsgruppeDKR",
  "version" : "2.27.1",
  "name" : "FunktionsgruppeDKR",
  "title" : "Funktionsgruppe (DKR)",
  "status" : "active",
  "date" : "2022-10-12T00:00:00+02:00",
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
  "description" : "Funktionsgruppe (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/FunctionGroupAlloplasty",
      "concept" : [{
        "code" : "knee_affected",
        "display" : "Kun aktuelle knæled afficeret"
      },
      {
        "code" : "opposite_knee_affected",
        "display" : "Funktionshæmmende lidelse i modsatte knæ"
      },
      {
        "code" : "functional_knee_prosthesis",
        "display" : "Velfungerende protese i modsatte knæ"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden funktionshæmmende lidelse"
      }]
    }]
  }
}

```
