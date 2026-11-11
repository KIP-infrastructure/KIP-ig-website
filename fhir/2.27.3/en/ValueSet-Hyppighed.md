# Hyppighed - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hyppighed**

## ValueSet: Hyppighed 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Hyppighed | *Version*:2.27.3 |
| Active as of 2023-09-05 | *Computable Name*:Hyppighed |

 
Opfølgning efter 2 eller 5 år 

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
  "id" : "Hyppighed",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Hyppighed",
  "version" : "2.27.3",
  "name" : "Hyppighed",
  "title" : "Hyppighed",
  "status" : "active",
  "date" : "2023-09-05T00:00:00+02:00",
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
  "description" : "Opfølgning efter 2 eller 5 år",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/FollowUp",
      "concept" : [{
        "code" : "aar_1",
        "display" : "1 år"
      },
      {
        "code" : "aar_2",
        "display" : "2 år"
      },
      {
        "code" : "aar_3",
        "display" : "3 år"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
