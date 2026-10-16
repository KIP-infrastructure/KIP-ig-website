# Scandinavian Stroke Scale - Armløft - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale - Armløft**

## ValueSet: Scandinavian Stroke Scale - Armløft 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SSSArmloeft | *Version*:2.27.0 |
| Active as of 2022-06-23 | *Computable Name*:SSSArmloeft |

 
Scandinavian Stroke Scale - Armløft 

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
  "id" : "SSSArmloeft",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SSSArmloeft",
  "version" : "2.27.0",
  "name" : "SSSArmloeft",
  "title" : "Scandinavian Stroke Scale - Armløft",
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
  "description" : "Scandinavian Stroke Scale - Armløft",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSArmLift",
      "concept" : [{
        "code" : "6",
        "display" : "6: løfter arm med normal kraft"
      },
      {
        "code" : "5",
        "display" : "5: løfter arm med nedsat kraft"
      },
      {
        "code" : "4",
        "display" : "4: løfter arm med fleksion af albuen"
      },
      {
        "code" : "2",
        "display" : "2: bevæger arm men ikke mod tyngden"
      },
      {
        "code" : "0",
        "display" : "0: paralyse"
      }]
    }]
  }
}

```
