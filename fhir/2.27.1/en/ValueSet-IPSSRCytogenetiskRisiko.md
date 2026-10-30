# IPSS-R - Cytogenetisk risiko-score - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IPSS-R - Cytogenetisk risiko-score**

## ValueSet: IPSS-R - Cytogenetisk risiko-score 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IPSSRCytogenetiskRisiko | *Version*:2.27.1 |
| Active as of 2022-06-09 | *Computable Name*:IPSSRCytogenetiskRisiko |

 
IPSS-R - Cytogenetisk risiko-score 

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
  "id" : "IPSSRCytogenetiskRisiko",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IPSSRCytogenetiskRisiko",
  "version" : "2.27.1",
  "name" : "IPSSRCytogenetiskRisiko",
  "title" : "IPSS-R - Cytogenetisk risiko-score",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "IPSS-R - Cytogenetisk risiko-score",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IPSSRCytogeneticCategory",
      "concept" : [{
        "code" : "0",
        "display" : "Very good (-Y, del(11q))"
      },
      {
        "code" : "1",
        "display" : "Good (Normal, del(5q), del(12p), del(20q), double including del(5q))"
      },
      {
        "code" : "2",
        "display" : "Intermediate (del(7q), +8, +19, i(17q), any other sngl./ dobl. indep. clones)"
      },
      {
        "code" : "3",
        "display" : "Poor (-7, inv(3)/t(3q)/del(3q), double including -7/del(7q), complex: 3 abnormalities)"
      },
      {
        "code" : "4",
        "display" : "Very poor (Complex: >3 abnormalities)"
      }]
    }]
  }
}

```
