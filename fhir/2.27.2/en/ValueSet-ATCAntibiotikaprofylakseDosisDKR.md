# ATC - Antibiotikaprofylakse, dosis (DKR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATC - Antibiotikaprofylakse, dosis (DKR)**

## ValueSet: ATC - Antibiotikaprofylakse, dosis (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ATCAntibiotikaprofylakseDosisDKR | *Version*:2.27.2 |
| Active as of 2022-10-14 | *Computable Name*:ATCAntibiotikaprofylakseDosisDKR |

 
ATC - Antibiotikaprofylakse, dosis (DKR) 

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
  "id" : "ATCAntibiotikaprofylakseDosisDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ATCAntibiotikaprofylakseDosisDKR",
  "version" : "2.27.2",
  "name" : "ATCAntibiotikaprofylakseDosisDKR",
  "title" : "ATC - Antibiotikaprofylakse, dosis (DKR)",
  "status" : "active",
  "date" : "2022-10-14T00:00:00+02:00",
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
  "description" : "ATC - Antibiotikaprofylakse, dosis (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "single_dose",
        "display" : "Enkelt præoperativ dosis"
      },
      {
        "code" : "multiple_doses",
        "display" : "Flere doser i 1 døgn"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Intervals",
      "concept" : [{
        "code" : ">1",
        "display" : "Mere end 1 døgn"
      }]
    }]
  }
}

```
