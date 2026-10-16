# Risikofaktorer DMPN - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Risikofaktorer DMPN**

## ValueSet: Risikofaktorer DMPN 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RisikofaktorerDMPN | *Version*:2.27.0 |
| Active as of 2022-07-18 | *Computable Name*:RisikofaktorerDMPN |

 
Risikofaktorer - DMPN 

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
  "id" : "RisikofaktorerDMPN",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RisikofaktorerDMPN",
  "version" : "2.27.0",
  "name" : "RisikofaktorerDMPN",
  "title" : "Risikofaktorer DMPN",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Risikofaktorer - DMPN",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RiskFactors",
      "concept" : [{
        "code" : "bmi",
        "display" : "Adipositas (BMI >30)"
      },
      {
        "code" : "hypertension",
        "display" : "Hypertension"
      },
      {
        "code" : "hyperlipidemia",
        "display" : "Hyperlipidæmi"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Smoking",
      "concept" : [{
        "code" : "smoker",
        "display" : "Ryger"
      },
      {
        "code" : "formersmoker",
        "display" : "Tidligere ryger"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "diabetes",
        "display" : "Diabetes"
      }]
    }]
  }
}

```
