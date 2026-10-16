# Indsat / fjernet - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indsat / fjernet**

## ValueSet: Indsat / fjernet 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IndsatFjernet | *Version*:2.27.0 |
| Active as of 2022-10-07 | *Computable Name*:IndsatFjernet |

 
Indsat / fjernet 

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
  "id" : "IndsatFjernet",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IndsatFjernet",
  "version" : "2.27.0",
  "name" : "IndsatFjernet",
  "title" : "Indsat / fjernet",
  "status" : "active",
  "date" : "2022-10-07T00:00:00+02:00",
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
  "description" : "Indsat / fjernet",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "inserted",
        "display" : "Indsat"
      },
      {
        "code" : "removed",
        "display" : "Fjernet"
      }]
    }]
  }
}

```
