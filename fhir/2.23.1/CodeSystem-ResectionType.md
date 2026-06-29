# Resection type - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Resection type**

## CodeSystem: Resection type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ResectionType | *Version*:2.23.1 |
| Active as of 2022-06-07 | *Computable Name*:ResectionType |

 
Resektionstype for kræft databaser (DEGC) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Resektionstype](ValueSet-Resektionstype.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ResectionType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ResectionType",
  "version" : "2.23.1",
  "name" : "ResectionType",
  "title" : "Resection type",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Resektionstype for kræft databaser (DEGC)",
  "content" : "complete",
  "count" : 9,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
    "code" : "gastrectomy",
    "display" : "Gastrektomi og øsofagojejunostomi (Roux)",
    "definition" : "Gastrektomi og øsofagojejunostomi (Roux) [KJDD00]"
  },
  {
    "code" : "ventricular",
    "display" : "Ventrikelresektion med gastrojejunostomi",
    "definition" : "Ventrikelresektion med gastrojejunostomi [KJDC20/KJCD30]"
  },
  {
    "code" : "transthoracic_ventricular",
    "display" : "Transtorakal øsofagustresektion og ventrikelresektion (øsofagogastrostomi)",
    "definition" : "Transtorakal øsofagustresektion og ventrikelresektion med øsofagogastrostomi [KJCC10/KJCC11]"
  },
  {
    "code" : "transhiatal_ventricular",
    "display" : "Transhiatal øsofagusresektion og ventrikelresektion (øsofagogastrostomi)",
    "definition" : "Transhiatal øsofagusresektion og ventrikelresektion med øsofagogastrostomi [KJCC00/KJDC40]"
  },
  {
    "code" : "transthoracic_intestine",
    "display" : "Transtorakal øsofagusresektion (interposition af tarm)",
    "definition" : "Transtorakal øsofagusresektion med interposition af tarm [KJCC30]"
  },
  {
    "code" : "transhiatal_intestine",
    "display" : "Transhiatal øsofagusresektion (interposition af tarm)",
    "definition" : "Transhiatal øsofagusresektion med interposition af tarm [KJCC20]"
  },
  {
    "code" : "endoscopic",
    "display" : "Endoskopisk",
    "definition" : "Endoskopisk [KJCA52/KJCA52A/KJCA52B/KJCA52C]"
  },
  {
    "code" : "otheresophagus",
    "display" : "Anden resektion af øsofagus (rekonstruktion med frit transplantat)",
    "definition" : "Anden resektion af øsofagus med rekonstruktion med frit transplantat"
  },
  {
    "code" : "other",
    "display" : "Andet",
    "definition" : "Andet"
  }]
}

```
