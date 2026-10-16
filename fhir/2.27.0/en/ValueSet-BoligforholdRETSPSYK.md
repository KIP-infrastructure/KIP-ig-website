# Boligforhold (RETSPSYK) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Boligforhold (RETSPSYK)**

## ValueSet: Boligforhold (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BoligforholdRETSPSYK | *Version*:2.27.0 |
| Active as of 2022-09-30 | *Computable Name*:BoligforholdRETSPSYK |

 
Boligforhold (RETSPSYK) 

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
  "id" : "BoligforholdRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BoligforholdRETSPSYK",
  "version" : "2.27.0",
  "name" : "BoligforholdRETSPSYK",
  "title" : "Boligforhold (RETSPSYK)",
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
  "description" : "Boligforhold (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HousingType",
      "concept" : [{
        "code" : "own_residence",
        "display" : "Egen bolig / bor hjemme"
      },
      {
        "code" : "institution",
        "display" : "Bosted / institution"
      },
      {
        "code" : "homeless",
        "display" : "Boligløs"
      }]
    }]
  }
}

```
