# Scandinavian Stroke Scale - Benløft - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale - Benløft**

## ValueSet: Scandinavian Stroke Scale - Benløft 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SSSBenloeft | *Version*:2.27.0 |
| Active as of 2022-06-23 | *Computable Name*:SSSBenloeft |

 
Scandinavian Stroke Scale - Benløft 

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
  "id" : "SSSBenloeft",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SSSBenloeft",
  "version" : "2.27.0",
  "name" : "SSSBenloeft",
  "title" : "Scandinavian Stroke Scale - Benløft",
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
  "description" : "Scandinavian Stroke Scale - Benløft",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSLegLift",
      "concept" : [{
        "code" : "6",
        "display" : "6: løfter ben med normal kraft"
      },
      {
        "code" : "5",
        "display" : "5: løfter strakt ben med nedsat kraft"
      },
      {
        "code" : "4",
        "display" : "4: løfter ben med fleksion af knæet"
      },
      {
        "code" : "2",
        "display" : "2: bevæger benet men ikke mod tyngden"
      },
      {
        "code" : "0",
        "display" : "0: paralyse"
      }]
    }]
  }
}

```
