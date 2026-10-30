# Implantat - anatomisk design - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Implantat - anatomisk design**

## ValueSet: Implantat - anatomisk design 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ImplantatAnatomiskDesign | *Version*:2.27.1 |
| Active as of 2022-10-06 | *Computable Name*:ImplantatAnatomiskDesign |

 
Implantat - anatomisk design 

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
  "id" : "ImplantatAnatomiskDesign",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ImplantatAnatomiskDesign",
  "version" : "2.27.1",
  "name" : "ImplantatAnatomiskDesign",
  "title" : "Implantat - anatomisk design",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Implantat - anatomisk design",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "helplast",
        "display" : "Helplast"
      },
      {
        "code" : "metalbacked",
        "display" : "Metalbacked"
      }]
    }]
  }
}

```
