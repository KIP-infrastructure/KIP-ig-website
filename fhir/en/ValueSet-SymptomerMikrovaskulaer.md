# Symptomer Mikrovaskulære - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Symptomer Mikrovaskulære**

## ValueSet: Symptomer Mikrovaskulære 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SymptomerMikrovaskulaer | *Version*:2.27.0 |
| Active as of 2022-07-18 | *Computable Name*:SymptomerMikrovaskulaer |

 
Typer af mikrovaskulære symptomeromplikationer - DMPN 

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
  "id" : "SymptomerMikrovaskulaer",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SymptomerMikrovaskulaer",
  "version" : "2.27.0",
  "name" : "SymptomerMikrovaskulaer",
  "title" : "Symptomer Mikrovaskulære",
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
  "description" : "Typer af mikrovaskulære symptomeromplikationer - DMPN",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Symptoms",
      "concept" : [{
        "code" : "visual_disorders",
        "display" : "Synsforstyrrelser"
      },
      {
        "code" : "dizziness",
        "display" : "Svimmelhed"
      },
      {
        "code" : "headache",
        "display" : "Hovedpine"
      },
      {
        "code" : "erythromelalgia",
        "display" : "Erythromelagi"
      },
      {
        "code" : "necrosis",
        "display" : "Nekrose/sårdannelser"
      }]
    }]
  }
}

```
