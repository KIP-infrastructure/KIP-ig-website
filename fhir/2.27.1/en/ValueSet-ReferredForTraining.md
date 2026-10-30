# Uddybning af hvor patienten er henvist til fysisk træning - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Uddybning af hvor patienten er henvist til fysisk træning**

## ValueSet: Uddybning af hvor patienten er henvist til fysisk træning 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ReferredForTraining | *Version*:2.27.1 |
| Active as of 2022-07-21 | *Computable Name*:ReferredForTraining |

 
Uddybning af hvor patienten er henvist til fysisk træning 

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
  "id" : "ReferredForTraining",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ReferredForTraining",
  "version" : "2.27.1",
  "name" : "ReferredForTraining",
  "title" : "Uddybning af hvor patienten er henvist til fysisk træning",
  "status" : "active",
  "date" : "2022-07-21T00:00:00+02:00",
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
  "description" : "Uddybning af hvor patienten er henvist til fysisk træning",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ReferredForTraining",
      "concept" : [{
        "code" : "hospitalregi",
        "display" : "Henvist til superviseret fysisk træning i hospitalsregi"
      },
      {
        "code" : "kommunaltregi",
        "display" : "Henvist til superviseret fysisk træning i kommunalt regi"
      }]
    }]
  }
}

```
