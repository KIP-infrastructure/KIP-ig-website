# Scandinavian Stroke Scale - Gang - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale - Gang**

## ValueSet: Scandinavian Stroke Scale - Gang 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SSSGang | *Version*:2.27.1 |
| Active as of 2022-06-23 | *Computable Name*:SSSGang |

 
Scandinavian Stroke Scale - Gang 

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
  "id" : "SSSGang",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SSSGang",
  "version" : "2.27.1",
  "name" : "SSSGang",
  "title" : "Scandinavian Stroke Scale - Gang",
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
  "description" : "Scandinavian Stroke Scale - Gang",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSWalk",
      "concept" : [{
        "code" : "12",
        "display" : "12: går 5 m uden hjælpemidler"
      },
      {
        "code" : "9",
        "display" : "9: går med hjælpemidler"
      },
      {
        "code" : "6",
        "display" : "6: går med personstøtte"
      },
      {
        "code" : "3",
        "display" : "3: går ikke, sidder uden støtte"
      },
      {
        "code" : "0",
        "display" : "0: seng eller kørestolsbunden"
      }]
    }]
  }
}

```
