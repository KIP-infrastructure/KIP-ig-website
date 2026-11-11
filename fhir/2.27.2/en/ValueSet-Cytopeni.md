# Cytopeni - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cytopeni**

## ValueSet: Cytopeni 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Cytopeni | *Version*:2.27.2 |
| Active as of 2022-07-12 | *Computable Name*:Cytopeni |

 
Cytopeni 

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
  "id" : "Cytopeni",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Cytopeni",
  "version" : "2.27.2",
  "name" : "Cytopeni",
  "title" : "Cytopeni",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Cytopeni",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "anemia",
        "display" : "Anæmi (hgb < 6,2 mmol/l)"
      },
      {
        "code" : "thrombocytopenic_disorder",
        "display" : "Trombocytopeni (< 100 x mia/l)"
      },
      {
        "code" : "neutropenia",
        "display" : "Neutropeni (< 1,8 x mia/l)"
      }]
    }]
  }
}

```
