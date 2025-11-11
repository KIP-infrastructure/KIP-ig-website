# SNOMED-CT - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SNOMED-CT**

## CodeSystem: SNOMED-CT 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SNOMEDCT | *Version*:2.13.0 |
| Active as of 2022-06-07 | *Computable Name*:SNOMEDCT |
| *Other Identifiers:*OID:2.16.840.1.113883.6.96 | |

 
SNOMED-CT - Codes used in databases. Link: https://browser.ihtsdotools.org/ 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DonorRelationDNSL](ValueSet-DonorRelationDNSL.md)
* [DonorRelationship](ValueSet-DonorRelationship.md)

This case-sensitive code system `https://kip.rkkp.dk/fhir/CodeSystem/SNOMEDCT` provides **a fragment** that includes following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SNOMEDCT",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SNOMEDCT",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.840.1.113883.6.96"
    }
  ],
  "version" : "2.13.0",
  "name" : "SNOMEDCT",
  "title" : "SNOMED-CT",
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
  "description" : "SNOMED-CT - Codes used in databases. Link: https://browser.ihtsdotools.org/",
  "caseSensitive" : true,
  "content" : "fragment",
  "concept" : [
    {
      "code" : "58158008",
      "display" : "Stable",
      "definition" : "Stable"
    },
    {
      "code" : "64957009",
      "display" : "Uncertain",
      "definition" : "Uncertain"
    },
    {
      "code" : "75134009",
      "display" : "Not examined for",
      "definition" : "Not examined for"
    },
    {
      "code" : "103337004",
      "display" : "In partial remission",
      "definition" : "In partial remission"
    },
    {
      "code" : "103338009",
      "display" : "In full remission",
      "definition" : "In full remission"
    },
    {
      "code" : "255314001",
      "display" : "Progressive",
      "definition" : "Progressive"
    },
    {
      "code" : "278179005",
      "display" : "Accelerated phase",
      "definition" : "Accelerated phase"
    },
    {
      "code" : "278177007",
      "display" : "Chronic phase",
      "definition" : "Chronic phase"
    },
    {
      "code" : "419099009",
      "display" : "Dead",
      "definition" : "Dead"
    },
    {
      "code" : "438949009",
      "display" : "Alive",
      "definition" : "Alive"
    },
    {
      "code" : "303071001",
      "display" : "Person in the family",
      "definition" : "Person in the family"
    },
    {
      "code" : "394863008",
      "display" : "Non-family member",
      "definition" : "Non-family member"
    },
    {
      "code" : "40683002",
      "display" : "Parent",
      "definition" : "Forælder"
    },
    {
      "code" : "375005",
      "display" : "Sibling",
      "definition" : "Søster/Bror"
    },
    {
      "code" : "11286003",
      "display" : "Twin sibling",
      "definition" : "Tvilling"
    },
    {
      "code" : "10896006",
      "display" : "Identical twin sibling",
      "definition" : "Tvilling (monocygot)"
    },
    {
      "code" : "713369009",
      "display" : "Live related kidney donor",
      "definition" : "Levende familiedonor"
    },
    {
      "code" : "105457003",
      "display" : "Cadaver donor",
      "definition" : "Afdød donor"
    },
    {
      "code" : "713183000",
      "display" : "Cadaver donor for kidney transplant",
      "definition" : "Afdød donor (Nekronyre)"
    },
    {
      "code" : "418460001",
      "display" : "Bone marrow stromal stem cell",
      "definition" : "Bone marrow stromal stem cell"
    },
    {
      "code" : "419583006",
      "display" : "Peripheral blood stem cell",
      "definition" : "Peripheral blood stem cell"
    }
  ]
}

```
