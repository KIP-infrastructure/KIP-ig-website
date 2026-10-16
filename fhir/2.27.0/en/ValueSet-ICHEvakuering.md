# Ved fund af ICH, skal der evkaueres eller ej - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ved fund af ICH, skal der evkaueres eller ej**

## ValueSet: Ved fund af ICH, skal der evkaueres eller ej 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ICHEvakuering | *Version*:2.27.0 |
| Active as of 2022-06-23 | *Computable Name*:ICHEvakuering |

 
Ved fund af intracerebralt hæmatom (ICH), skal der evkaueres eller ej 

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
  "id" : "ICHEvakuering",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ICHEvakuering",
  "version" : "2.27.0",
  "name" : "ICHEvakuering",
  "title" : "Ved fund af ICH, skal der evkaueres eller ej",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Ved fund af intracerebralt hæmatom (ICH), skal der evkaueres eller ej",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ICHAction",
      "concept" : [{
        "code" : "evacution",
        "display" : "Kræver evakuering"
      },
      {
        "code" : "noevacuation",
        "display" : "Kræver ikke evakuering"
      }]
    }]
  }
}

```
