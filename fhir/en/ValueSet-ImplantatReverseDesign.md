# Implantat - reverse design - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Implantat - reverse design**

## ValueSet: Implantat - reverse design 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ImplantatReverseDesign | *Version*:2.27.1 |
| Active as of 2022-10-06 | *Computable Name*:ImplantatReverseDesign |

 
Implantat - reverse design 

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
  "id" : "ImplantatReverseDesign",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ImplantatReverseDesign",
  "version" : "2.27.1",
  "name" : "ImplantatReverseDesign",
  "title" : "Implantat - reverse design",
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
  "description" : "Implantat - reverse design",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "standard",
        "display" : "Standard"
      },
      {
        "code" : "eccentric",
        "display" : "Excentrisk"
      }]
    }]
  }
}

```
