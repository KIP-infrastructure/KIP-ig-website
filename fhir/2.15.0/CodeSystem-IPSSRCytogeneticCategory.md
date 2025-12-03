# IPSS-R - Cytogenetic Category - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IPSS-R - Cytogenetic Category**

## CodeSystem: IPSS-R - Cytogenetic Category 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/IPSSRCytogeneticCategory | *Version*:2.15.0 |
| Active as of 2022-06-07 | *Computable Name*:IPSSRCytogeneticCategory |

 
IPSS-R - Cytogenetic Category. Link: https://www.hematology.dk/index.php/vejledninger/udregnere/330-ipss-r 

 This Code system is referenced in the content logical definition of the following value sets: 

* [IPSSRCytogenetiskRisiko](ValueSet-IPSSRCytogenetiskRisiko.md)

This case-sensitive code system `https://kip.rkkp.dk/fhir/CodeSystem/IPSSRCytogeneticCategory` provides **a fragment** that includes following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "IPSSRCytogeneticCategory",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/IPSSRCytogeneticCategory",
  "version" : "2.15.0",
  "name" : "IPSSRCytogeneticCategory",
  "title" : "IPSS-R - Cytogenetic Category",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "IPSS-R - Cytogenetic Category. Link: https://www.hematology.dk/index.php/vejledninger/udregnere/330-ipss-r",
  "caseSensitive" : true,
  "content" : "fragment",
  "concept" : [
    {
      "code" : "0",
      "display" : "Very good: -Y, del(11q)",
      "definition" : "Very good: -Y, del(11q)"
    },
    {
      "code" : "1",
      "display" : "Good: normal, del(5q), del(12p), del(20q), double including del(5q)",
      "definition" : "Good: normal, del(5q), del(12p), del(20q), double including del(5q)"
    },
    {
      "code" : "2",
      "display" : "Intermediate: del(7q), +8, +19, i(17q), any other single or double independent clones",
      "definition" : "Intermediate: del(7q), +8, +19, i(17q), any other single or double independent clones"
    },
    {
      "code" : "3",
      "display" : "Poor: -7, inv(3)/t(3q)/del(3q), double including -7/del(7q), complex with 3 abnormalities",
      "definition" : "Poor: -7, inv(3)/t(3q)/del(3q), double including -7/del(7q), complex with 3 abnormalities"
    },
    {
      "code" : "4",
      "display" : "Very poor: complex with >3 abnomalities",
      "definition" : "Very poor: complex with >3 abnomalities"
    }
  ]
}

```
