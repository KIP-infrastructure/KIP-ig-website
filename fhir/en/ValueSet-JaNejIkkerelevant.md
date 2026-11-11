# Ja / Nej / Ikke relevant - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ja / Nej / Ikke relevant**

## ValueSet: Ja / Nej / Ikke relevant 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/JaNejIkkerelevant | *Version*:2.27.3 |
| Active as of 2022-05-16 | *Computable Name*:JaNejIkkerelevant |

 
Dækker over Ja/nej/ikke relevant. 

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
  "id" : "JaNejIkkerelevant",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/JaNejIkkerelevant",
  "version" : "2.27.3",
  "name" : "JaNejIkkerelevant",
  "title" : "Ja / Nej / Ikke relevant",
  "status" : "active",
  "date" : "2022-05-16T00:00:00+02:00",
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
  "description" : "Dækker over Ja/nej/ikke relevant.",
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "Y",
        "display" : "Ja"
      },
      {
        "code" : "N",
        "display" : "Nej"
      },
      {
        "code" : "NA",
        "display" : "Ikke relevant"
      }]
    }]
  }
}

```
