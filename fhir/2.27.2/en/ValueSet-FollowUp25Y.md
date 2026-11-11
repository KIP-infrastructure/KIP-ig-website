# Opfølgning 2/5 år - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Opfølgning 2/5 år**

## ValueSet: Opfølgning 2/5 år 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FollowUp25Y | *Version*:2.27.2 |
| Active as of 2023-07-03 | *Computable Name*:FollowUp25Y |

 
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
  "id" : "FollowUp25Y",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FollowUp25Y",
  "version" : "2.27.2",
  "name" : "FollowUp25Y",
  "title" : "Opfølgning 2/5 år",
  "status" : "active",
  "date" : "2023-07-03T00:00:00+02:00",
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
        "code" : "aar_2",
        "display" : "2 år"
      },
      {
        "code" : "aar_5",
        "display" : "5 år"
      }]
    }]
  }
}

```
